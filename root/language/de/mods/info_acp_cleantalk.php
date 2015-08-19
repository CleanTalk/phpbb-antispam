<?php
/**
*
* info_acp_cleantalk [Deutsche]
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
    'ACP_CLEANTALK'                     => 'CleanTalk',
    'CT_ENABLE'                         => 'Modul einschalten',
    'CT_AUTH_KEY'                       => 'Access key',
    'CT_AUTH_KEY_EXPLAIN'               => 'Um einen neuen Access key zu erhalten, <a href="http://cleantalk.org/install/phpbb3?step=2" target="_blank">registrieren</a> Sie sich bitte auf der Webseite.',
	'CT_SETTINGS'                       => 'Einstellungen',
    'CT_TITLE'                          => 'CleanTalk. Spamschutz',
    'CT_TITLE_EXPLAIN'                  => 'Hier können Sie die Basiseinstellungen des CleanTalk-Systems steuern.',
	'CT_MODERATE_GUESTS'                => 'Gäste prüfen',
	'CT_MODERATE_GUESTS_EXPLAIN'        => 'Beiträge und Threads der Forumgäste werden auf Spam geprüft.',
	'CT_MODERATE_NEWLY_REGISTERED'      => 'Neue Benutzer prüfen',
	'CT_MODERATE_NEWLY_REGISTERED_EXPLAIN'      => 'Beiträge und Threads der Neubenutzer (das sind üblicherweise diejenigen Nutzer, die weniger als 5 zugelassene Beiträge haben) werden auf Spam geprüft.',
	'CT_NEWUSER'                        => 'Registrierungen prüfen',
	'CT_NEWUSER_EXPLAIN'                => 'Registrierungen der Neubenutzer des Forums auf Spam prüfen. Wird die Registrierung nach der Prüfung abgelehnt, so wird eine begründete Absage gegeben.',
	'CT_SUCCESSFULLY_INSTALLED' 		=> 'CleanTalk wurde erfolgreich installiert!',
));

$lang = array_merge($lang, array(
	'CT_ERROR'			=> 'Ein Fehler ist beim Lauf des Servers der automatischen Moderation aufgetreten %s.',
	'CT_USER_DENY'		=> 'Benutzername: %s, email: %s.',
	'CT_CONFIRM_DELETE_USER'		=> 'Das Benutzerprofil <b>%s</b> und alle dessen Beiträge löschen?',
	'CT_RETURN_MEMBERLIST'		=> '<a href="%s">Zurück zur Benutzerliste</a>',
));

$lang = array_merge($lang, array(
	'CT_PRIVACY_POLICY'			=> '<br />Zum Spamschutz des Forums kann Ihre E-Mail-Adresse, Ihr Benutzername, Ihre IP-Adresse und der Inhalt Ihrer Beiträge auf den Server des Spamschutz-Services <a href="http://cleantalk.ru" title="CleanTalk" target="_blank">CleanTalk</a> übergeben werden.',
	'CT_AUTO_APPROVED'			=> 'Post approved. Anti-spam by CleanTalk.',
	'CT_SIGNUP_APPROVED'			=> 'Account approved. Anti-spam by CleanTalk.',
));

$lang = array_merge($lang, array(
	'CT_INFO'			    => 'Information',
    'CT_MOD_VERSION'            => 'Version',
    'CT_MOD_HOMEPAGE'         => 'Webseite',
    'CT_MOD_HOMEPAGE_DATA'         => '<a href="http://cleantalk.org" target="_blank">cleantalk.org</a>',
));

?>