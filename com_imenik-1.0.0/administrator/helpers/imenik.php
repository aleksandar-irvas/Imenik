<?php

/**
 * @version     1.0.0
 * @package     com_imenik
 * @copyright   SoftClub Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Aleksandar <aca_fpi@hotmail.com> - http://softclub.rs
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Imenik helper.
 */
class ImenikHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_IMENIK_TITLE_FIRMS'),
			'index.php?option=com_imenik&view=firms',
			$vName == 'firms'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_imenik';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
