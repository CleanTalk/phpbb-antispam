<?php
/**
*
* @package acp
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

/**
* @package acp
*/
class acp_cleantalk
{
    var $u_action;
    var $new_config = array();

    function main($id, $mode)
    {
        global $db, $user, $auth, $template;
        global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
        global $cache;

        $user->add_lang('acp/board');

        $action = request_var('action', '');
        $submit = (isset($_POST['submit'])) ? true : false;

        $form_key = 'acp_cleantalk';
        add_form_key($form_key);

        /**
        *   Validation types are:
        *       string, int, bool,
        *       script_path (absolute path in url - beginning with / and no trailing slash),
        *       rpath (relative), rwpath (realtive, writable), path (relative path, but able to escape the root), wpath (writable)
        */
        switch ($mode)
        {
            case 'settings':
                $display_vars = array(
                    'title' => 'CT_TITLE',
                    'vars'  => array(
                        'legend1'               => 'CT_SETTINGS',
                        'ct_enable'             => array('lang' => 'CT_ENABLE',             'validate' => 'bool',   'type' => 'radio:yes_no', 'explain' => false),
                        'ct_newuser'            => array('lang' => 'CT_NEWUSER',            'validate' => 'bool',   'type' => 'radio:yes_no', 'explain' => true),

                        'ct_moderate_guests'            => array('lang' => 'CT_MODERATE_GUESTS',            'validate' => 'bool',   'type' => 'radio:yes_no', 'explain' => true),
                        'ct_moderate_newly_registered'            => array('lang' => 'CT_MODERATE_NEWLY_REGISTERED',            'validate' => 'bool',   'type' => 'radio:yes_no', 'explain' => true),

                        'ct_auth_key'           => array('lang' => 'CT_AUTH_KEY',           'validate' => 'string', 'type' => 'text:40:60', 'explain' => true),

                        'legend2'               => 'ACP_SUBMIT_CHANGES',
                    )
                );
            break;

            default:
                trigger_error('NO_MODE', E_USER_ERROR);
            break;
        }

        if (isset($display_vars['lang']))
        {
            $user->add_lang($display_vars['lang']);
        }

        $this->new_config = $config;
        $cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
        $error = array();

        // We validate the complete config if whished
        validate_config_vars($display_vars['vars'], $cfg_array, $error);

        if ($submit && !check_form_key($form_key))
        {
            $error[] = $user->lang['FORM_INVALID'];
        }
        // Do not write values if there is an error
        if (sizeof($error))
        {
            $submit = false;
        }

        // We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
        foreach ($display_vars['vars'] as $config_name => $null)
        {
            if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
            {
                continue;
            }

            $this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

            if ($submit)
            {
                set_config($config_name, $config_value);
                if ($config_name === 'ct_server_url')
                {
                    set_config('ct_work_url', '');
                }
				
                set_config('ct_is_install', 1);
            }
        }

        if ($submit)
        {
            add_log('admin', 'LOG_CONFIG_' . strtoupper($mode));

            trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
        }

        $this->tpl_name = 'acp_cleantalk';
        $this->page_title = $display_vars['title'];

        $template->assign_vars(array(
            'L_TITLE'           => $user->lang[$display_vars['title']],
            'L_TITLE_EXPLAIN'   => $user->lang[$display_vars['title'] . '_EXPLAIN'],

            'S_ERROR'           => (sizeof($error)) ? true : false,
            'ERROR_MSG'         => implode('<br />', $error),

            'U_ACTION'          => $this->u_action,
            'CT_MOD_VERSION'       => isset($config['ct_version']) ? $config['ct_version'] : '-',
            )
        );

        // Output relevant page
        foreach ($display_vars['vars'] as $config_key => $vars)
        {
            if (!is_array($vars) && strpos($config_key, 'legend') === false)
            {
                continue;
            }

            if (strpos($config_key, 'legend') !== false)
            {
                $template->assign_block_vars('options', array(
                    'S_LEGEND'      => true,
                    'LEGEND'        => (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
                );

                continue;
            }

            $type = explode(':', $vars['type']);

            $l_explain = '';
            if ($vars['explain'] && isset($vars['lang_explain']))
            {
                $l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
            }
            else if ($vars['explain'])
            {
                $l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
            }

            $content = build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars);

            if (empty($content))
            {
                continue;
            }

            $template->assign_block_vars('options', array(
                'KEY'           => $config_key,
                'TITLE'         => (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
                'S_EXPLAIN'     => $vars['explain'],
                'TITLE_EXPLAIN' => $l_explain,
                'CONTENT'       => $content,
                )
            );

            unset($display_vars['vars'][$config_key]);
        }
    }

}

?>
