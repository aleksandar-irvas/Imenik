<?php
/**
 * @version     1.0.0
 * @package     com_imenik
 * @copyright   SoftClub Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Aleksandar <aca_fpi@hotmail.com> - http://softclub.rs
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Imenik');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
