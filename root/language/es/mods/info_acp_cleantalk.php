<?php
/**
*
* info_acp_cleantalk [Spanish]
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
    'CT_ENABLE'                             => 'Conectar el módulo',
    'CT_AUTH_KEY'                       	=> 'Clave de acceso (Access key)',
    'CT_AUTH_KEY_EXPLAIN'                   => 'Regístrese para obtener una nueva clave <a href="http://cleantalk.org/install/phpbb3?step=2" target="_blank">cleantalk.org</a>',
	'CT_SETTINGS'                           => 'Opciones',
    'CT_TITLE'                              => 'CleanTalk. Protección contra el spam',
    'CT_TITLE_EXPLAIN'                      => 'Aquí usted puede configurar las opciones generales del mod CleanTalk',
	'CT_MODERATE_GUESTS'                    => 'Llevar un registro de los visitantes de la página',
	'CT_MODERATE_GUESTS_EXPLAIN'            => 'Los mensajes y temas de los visitantes del Foro serán sometidos a un control de spam.',
	'CT_MODERATE_NEWLY_REGISTERED'          => 'Llevar un registro de nuevos usuarios',
	'CT_MODERATE_NEWLY_REGISTERED_EXPLAIN'  => 'Los mensajes y temas de Nuevos usuarios del foro (suelen ser los usuarios que tienen 5 mensajes autorizados como mínimo) serán sometidos a un control de spam.',
	'CT_NEWUSER'                            => 'Verificar los registros',
	'CT_NEWUSER_EXPLAIN'                    => 'Someter a un control de spam el registro de nuevos usuarios del Foro. Los que no cumplan el control, recibirán una denuncia del registro donde se les explica el motivo.',
	'CT_SUCCESSFULLY_INSTALLED'             => '¡CleanTalk está instalado con éxito!',
));

$lang = array_merge($lang, array(
	'CT_ERROR'					=> 'Got error while connecting to Cleantalk server %s',
	'CT_USER_DENY'				=> 'Nombre %s del usuario %s.',
	'CT_CONFIRM_DELETE_USER'	=> '¿Eliminar al usuario y todos sus mensajes?',
	'CT_RETURN_MEMBERLIST'		=> '<a href="%s">Volver a la lista de los usuarios</a>',
	'CT_CLOSE_INFO'				=> 'Close this notification',
	'CLEANTALK_INFO'			=> '<a href="http://cleantalk.org/phpbb3" target="_blank">Spam protection for phpBB</a>',
));

$lang = array_merge($lang, array(
	'CT_PRIVACY_POLICY'			=> '<br />Con objeto de proteger el Foro contra el spam, sus correos electrónicos, apodo, dirección IP y texto del mensaje pueden ser enviados a los servidores de la protección contra el spam <a href="http://cleantalk.org" title="CleanTalk" target="_blank">CleanTalk</a>.',
	'CT_AUTO_APPROVED'			=> 'Post approved. Anti-spam by CleanTalk.',
	'CT_SIGNUP_APPROVED'			=> 'Account approved. Anti-spam by CleanTalk.',
));

$lang = array_merge($lang, array(
	'CT_INFO'			    => 'Información',
    'CT_MOD_VERSION'            => 'Versión',
    'CT_MOD_HOMEPAGE'         => 'Página-web',
    'CT_MOD_HOMEPAGE_DATA'         => '<a href="http://cleantalk.org" target="_blank">cleantalk.org</a>',
));

?>