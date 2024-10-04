<?php
/**
*
* info_acp_cleantalk [English]
*
* @package language
* @version $Id$
* @copyright (c) 2014 CleanTalk welcome@cleantalk.org 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'ACP_CLEANTALK'                         => 'CleanTalk',
    'CT_ENABLE'                             => 'Enable MOD',
    'CT_AUTH_KEY'                       	=> 'Access key',
    'CT_AUTH_KEY_EXPLAIN'                   => 'To get a new key please register at site <a href="https://cleantalk.org/install/phpbb3?step=2">cleantalk.org</a>',
	'CT_SETTINGS'                           => 'Settings',
    'CT_TITLE'                              => 'CleanTalk. Spam protection',
    'CT_TITLE_EXPLAIN'                      => 'Here you can control the basic settings mode "CleanTalk. Spam protection."',
	'CT_MODERATE_GUESTS'                    => 'Moderate Guests',
	'CT_MODERATE_GUESTS_EXPLAIN'            => 'Posts and topics from guests will be test for spam. Spam posts will be send to moderation queue.',
	'CT_MODERATE_NEWLY_REGISTERED'          => 'Moderate Newly Registered Users',
	'CT_MODERATE_NEWLY_REGISTERED_EXPLAIN'  => 'Posts and topics from new users will be test for spam. Spam posts will be send to moderation queue.',
	'CT_NEWUSER'                            => 'Test registration',
	'CT_NEWUSER_EXPLAIN'                    => 'Failed the test will be given a refusal to register with a statement of reasons.',
	'CT_SUCCESSFULLY_INSTALLED'             => 'CleanTalk spam protection successfully installed!',
));

$lang = array_merge($lang, array(
	'CT_ERROR'					=> 'Got error while connecting to Cleantalk server %s',
	'CT_USER_DENY'				=> 'User name: %s, email: %s.',
	'CT_CONFIRM_DELETE_USER'	=> 'Are you sure delete user <b>%s</b> with all his posts?',
	'CT_RETURN_MEMBERLIST'		=> '<a href="%s">Return to memberslist</a>',
	'CT_CLOSE_INFO'				=> 'Close this notification',
	'CLEANTALK_INFO'			=> '<a href="https://cleantalk.org/phpbb3">Spam protection for phpBB</a>',
));

$lang = array_merge($lang, array(
	'CT_PRIVACY_POLICY'			=> '<br />In order to protect the forum from spam your Email, Nickname, IP address, and the message can be sent to the servers anti-spam service <a href="https://cleantalk.org" title="CleanTalk">CleanTalk</a>.',
	'CT_AUTO_APPROVED'			=> 'Post approved. Anti-spam by CleanTalk.',
	'CT_SIGNUP_APPROVED'			=> 'Account approved. Anti-spam by CleanTalk.',
));

$lang = array_merge($lang, array(
	'CT_INFO'			    => 'Information',
    'CT_MOD_VERSION'            => 'Version',
    'CT_MOD_HOMEPAGE'         => 'Homepage',
    'CT_MOD_HOMEPAGE_DATA'         => '<a href="https://cleantalk.org">cleantalk.org</a>',
));

?>