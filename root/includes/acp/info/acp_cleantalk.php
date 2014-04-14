<?php
/**
*
* @author Denis Shagimuratov shagimuratov@cleantalk.ru
* @package acp
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_cleantalk_info
{
    function module()
    {
        return array(
            'filename'  => 'acp_cleantalk',
            'title'     => 'CT_TITLE',
            'version'   => '1.0.0',
            'modes'     => array(
                'settings'      => array('title' => 'CT_TITLE', 'auth' => 'acl_a_board', 'cat' => array('CT_TITLE')),
            ),
        );
    }

    function install()
    {
    }

    function uninstall()
    {
    }
}

?>