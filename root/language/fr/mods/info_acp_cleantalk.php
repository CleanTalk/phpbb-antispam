<?php
/**
*
* info_acp_cleantalk [French]
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
    'CT_ENABLE'                             => 'Allumer le MOD',
    'CT_AUTH_KEY'                       	=> 'Le clé d\'accès (Access key)',
    'CT_AUTH_KEY_EXPLAIN'                   => 'Pour reçevoir un nouveau clé, s’il vous plait, enregistrez-vous sur le site<a href="https://cleantalk.org/install/phpbb3?step=2" target="_blank">cleantalk.org</a>',
	'CT_SETTINGS'                           => 'Les ajustements',
    'CT_TITLE'                              => 'CleanTalk. Sécurité contre le spam',
    'CT_TITLE_EXPLAIN'                      => 'Ici vous pouvez controler les ajustements principaux du MOD “CleanTalk. Sécurité contre le spam”',
	'CT_MODERATE_GUESTS'                    => 'Modérer les visiteurs',
	'CT_MODERATE_GUESTS_EXPLAIN'            => 'Les postes et les thèmes des visiteurs seront contrôlés pour le spam. Les postes avec le spam seront envoyés a la queue de la moderation.',
	'CT_MODERATE_NEWLY_REGISTERED'          => 'Modérer les nouveaux utilisateurs',
	'CT_MODERATE_NEWLY_REGISTERED_EXPLAIN'  => 'Les postes et les thèmes des nouveaux utilisateurs seront contrôlés pour le spam. Les postes avec le spam seront envoyés a la queue de la moderation.',
	'CT_NEWUSER'                            => 'Contrôler le log',
	'CT_NEWUSER_EXPLAIN'                    => 'Ceux qui n’avaient pas reussi au log recevront le refus de s’enregistrer avec la déclaration de raisons',
	'CT_SUCCESSFULLY_INSTALLED'             => 'CleanTalk. Sécurité contre le spam est installé avec succès!',
));

$lang = array_merge($lang, array(
	'CT_ERROR'					=> 'Il y a un erreur pendant le contact avec le serveur du CleanTalk %s',
	'CT_USER_DENY'				=> 'Le nom d’utilisateur: %s, courriel: %s .',
	'CT_CONFIRM_DELETE_USER'	=> 'Êtes-vous sûrs de l’effacement de l’utilisateur <b>%s</b> avec toutes ses postes?',
	'CT_RETURN_MEMBERLIST'		=> '<a href="%s">Rentrer au liste des utilisateurs</a>',
	'CT_CLOSE_INFO'				=> 'Fermer cette notification',
	'CLEANTALK_INFO'			=> '<a href="https://cleantalk.org/phpbb3" target="_blank">Sécurité contre le spam pour le phpBB</a>',
));

$lang = array_merge($lang, array(
	'CT_PRIVACY_POLICY'			=> '<br />Pour protéger le forum contre le spam, votre nom, courriel, IP-addresse et le message peuvent être envoyés au serveur du service contre le spam <a href="https://cleantalk.org" title="CleanTalk" target="_blank">CleanTalk</a>.',
	'CT_AUTO_APPROVED'			=> 'Post approved. Anti-spam by CleanTalk.',
	'CT_SIGNUP_APPROVED'			=> 'Account approved. Anti-spam by CleanTalk.',
));

$lang = array_merge($lang, array(
	'CT_INFO'			    => 'Information',
    'CT_MOD_VERSION'            => 'Version',
    'CT_MOD_HOMEPAGE'         => 'Rentrer à la page d\'accuei',
    'CT_MOD_HOMEPAGE_DATA'         => '<a href="https://cleantalk.org" target="_blank">cleantalk.org</a>',
));

?>