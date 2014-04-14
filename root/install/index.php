<?php
/**
*
* @package - NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'CT_TITLE';

$version_config_name = 'ct_version';
$language_file = 'mods/info_acp_cleantalk';

if(empty($config[$version_config_name]) && !empty($config['ct_agent'])){
    $cur_version = substr($config['ct_agent'], strrpos($config['ct_agent'], '-') + 1);
    if($cur_version){
        set_config($version_config_name, "{$cur_version[0]}.{$cur_version[1]}.{$cur_version[2]}");
    }
}
$versions = array(
	// Version 2.9.4
	'2.9.4'	=> array(
		'config_add' => array(
            array('ct_server_url', 'http://moderate.cleantalk.ru'),
            array('ct_auth_key', ''),
            array('ct_enable', 1),
            array('ct_newuser', 1),
            array('ct_post_count', '5'),
            array('ct_server_changed', 0),
            array('ct_server_ttl', 0),
            array('ct_url_prefix', 'http://'),
            array('ct_work_url', ''),
		),
        'table_column_add' => array(
            array(USERS_TABLE,  'ct_request_id', array('CHAR:32', '', 'null')),
        ),
	),

    // Version 3.3.4
    '3.3.4' => array(
	'table_column_add' => array(
		array(POSTS_TABLE, 'ct_request_id', array('CHAR:32', '', 'null')),
		),
	),
    '3.4.6' => array(
	'config_add' => array(
            array('ct_moderate_guests', 1),
            array('ct_moderate_newly_registered', 1)
		)
	),
	'3.5.10' => array(
		'table_column_add' => array(
			array(SESSIONS_TABLE, 'ct_submit_time', array('INT:11', '0'))
		),
		'config_add' => array(
            array('ct_is_install', '0'),
        )
	),	
	'3.7.16' => array(
	   	// no changes ... purge caches anyways
		 'cache_purge' => array(
				 'auth'
		 ),
        //ACP Module
        'module_add' => array(
             array('acp', 'ACP_CAT_DOT_MODS', array(
                'module_enabled'   => 1,
                'module_display'   => 1,
                'module_langname'   => 'ACP_CLEANTALK',
                'module_auth'      => 'acl_a_board',
                ),
             ),
             array('acp', 'ACP_CLEANTALK', array(
                'module_basename' => 'cleantalk',
                'module_langname' => 'CT_TITLE',
                'module_mode'   => 'settings',
                'module_auth' => 'acl_a_board',
             )),
        ),
	),
	'3.72' => array(
	   	// no changes ... purge caches anyways
		 'cache_purge' => array(
				 'auth'
		    ),
    ),
	'3.73' => array(
	   	// no changes ... purge caches anyways
		 'cache_purge' => array(
				 'auth'
		    ),
    ),
	'3.74' => array(
	   	// no changes ... purge caches anyways
		 'cache_purge' => array(
				 'auth'
		    ),
    ),
	'3.75' => array(
	   	// no changes ... purge caches anyways
		 'cache_purge' => array(
				 'auth'
		    ),
    ),
);

// Include the UMIL Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>
