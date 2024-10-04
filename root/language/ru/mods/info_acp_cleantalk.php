<?php
/**
*
* info_acp_cleantalk [Russian]
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
    'CT_ENABLE'                         => 'Включить модуль',
    'CT_AUTH_KEY'                       => 'Ключ доступа',
    'CT_AUTH_KEY_EXPLAIN'               => 'Чтобы получить новый ключ зарегистрируйтесь на сайте <a href="https://cleantalk.org/install/phpbb3?step=2" target="_blank">cleantalk.org</a>',
	'CT_SETTINGS'                       => 'Настройки',
    'CT_TITLE'                          => 'Клинтолк. Защита от спама',
    'CT_TITLE_EXPLAIN'                  => 'Тут вы можете управлять основными настройками мода "Клинтолк. Защита от спама".',
	'CT_MODERATE_GUESTS'                => 'Проверять Гостей',
	'CT_MODERATE_GUESTS_EXPLAIN'        => 'Сообщения и темы Гостей форума будут проверены на спам.',
	'CT_MODERATE_NEWLY_REGISTERED'      => 'Проверять Новых пользователей',
	'CT_MODERATE_NEWLY_REGISTERED_EXPLAIN'      => 'Сообщения и темы Новых пользователей форума (обычно это пользователи с количеством одобренных сообщений менее 5) будут проверены на спам.',
	'CT_NEWUSER'                        => 'Проверять регистрации',
	'CT_NEWUSER_EXPLAIN'                => 'Проверять на спам регистрации новых пользователей на форуме. Непрошедшим проверку будет выдан отказ в регистрации с объяснением причин.',
	'CT_SUCCESSFULLY_INSTALLED' 		=> 'Клинтолк успешно установлен!',
));

$lang = array_merge($lang, array(
	'CT_ERROR'			=> 'Произошла ошибка во время работы с сервером автомодерации %s',
	'CT_USER_DENY'		=> 'Имя пользователя: %s, email: %s.',
	'CT_CONFIRM_DELETE_USER'		=> 'Удалить пользователя <b>%s</b> и все его сообщения?',
	'CT_RETURN_MEMBERLIST'		=> '<a href="%s">Вернуться в список пользователей</a>',
	'CLEANTALK_INFO'			=> '<a href="https://cleantalk.org/phpbb3" target="_blank">Защита от спама phpBB</a>',
	'CT_CLOSE_INFO'             => 'Закрыть уведомление',
));

$lang = array_merge($lang, array(
	'CT_PRIVACY_POLICY'			=> '<br />В целях защиты форума от спама Ваши Email, Nickname, IP адрес и текст сообщения могут быть переданы на сервера сервиса защиты от спама <a href="https://cleantalk.org" title="CleanTalk" target="_blank">CleanTalk</a>.',
	'CT_AUTO_APPROVED'			=> 'Пост одобрен. Антиспам от CleanTalk.',
	'CT_SIGNUP_APPROVED'			=> 'Акаунт одобрен. Антиспам от CleanTalk.',
));

$lang = array_merge($lang, array(
	'CT_INFO'			    => 'Информация',
    'CT_MOD_VERSION'            => 'Версия',
    'CT_MOD_HOMEPAGE'         => 'Сайт',
    'CT_MOD_HOMEPAGE_DATA'         => '<a href="https://cleantalk.org" target="_blank">cleantalk.org</a>',
));

?>