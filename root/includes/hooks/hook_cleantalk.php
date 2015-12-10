<?php
/*

  CleanTalk. phpBB3 spam protection MOD 
  Copyright (C) 2013 CleanTalk team team@cleantalk.ru

  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function cleantalk_hook()
{
	global $template, $user, $config;

	/*
		JavaScript test's HTML code	
	*/
	if(@isset($_POST['config']['ct_auth_key']))
	{
		$request=Array();
		$request['method_name'] = 'check_message'; 
		$request['auth_key'] = $_POST['config']['ct_auth_key'];
		$request['sender_email'] = 'good@cleantalk.org';
		$request['sender_nickname'] = 'CleanTalk';
		$request['message'] = 'This message is a test to check the connection to the CleanTalk servers. ';
		$request['agent'] = 'ct-phpbb-' . preg_replace("/(\d)\.(\w+)/", "$1$2", $config['ct_version']);
		
		$url='https://moderate.cleantalk.org/api2.0';
		if(!function_exists('sendRawRequest'))
		{
			require_once('/../cleantalk.class.php');
		}
		$result=sendRawRequest($url, $request, true);
	}
	if(isset($config['ct_show_link']) && $config['ct_show_link'])
	{
		$credit=$template->_rootref['CREDIT_LINE'];
		$credit.="<br><div style='width:100%;text-align:center;'><a href='https://cleantalk.org/phpbb-anti-spam-mod'>phpBB spam</a> blocked by CleanTalk.</div>";
		$template->assign_var('CREDIT_LINE',$credit);
	}
	if (!defined('ADMIN_START') && !defined('IN_INSTALL') && defined('HEADER_INC') && !empty($template->_rootref['S_FORM_TOKEN']) && $config['ct_enable'])
	{
		$ct_checkjs_def = 0;
		$ct_checkjs_key = md5($user->data['user_form_salt'] . $user->session_id);
        $field_id = 'ct_checkjs_' . md5(rand(0, 1000));
		$template->assign_var('S_FORM_TOKEN',
				$template->_rootref['S_FORM_TOKEN'] . 
				'<input type="hidden" id="' . $field_id . '" name="ct_checkjs" value="' . $ct_checkjs_def . '">
				<script type="text/javascript">// <![CDATA[
                    if(document.getElementById("' . $field_id . '").value == 0) {
                          document.getElementById("' . $field_id . '").value = document.getElementById("' . $field_id . '").value.replace("' . $ct_checkjs_def .  '", "' . $ct_checkjs_key . '");
                    } 
				// ]]></script>
				');
	}
	
	/*
		Privacy info
	*/
	if (!defined('ADMIN_START') && !defined('IN_INSTALL') && defined('HEADER_INC') && !empty($template->_rootref['AGREEMENT_TEXT']) && $config['ct_enable'])
	{
		if (empty($user->lang['CT_PRIVACY_POLICY']))
			$user->add_lang('mods/info_acp_cleantalk');

		if (isset($user->lang['CT_PRIVACY_POLICY']))
	 		$template->assign_var('AGREEMENT_TEXT', $template->_rootref['AGREEMENT_TEXT'] . $user->lang['CT_PRIVACY_POLICY']);
	}
}

$phpbb_hook->register(array('template', 'display'), 'cleantalk_hook');

?>