<?php
/**
 * @version     1.0.0
 * @package     com_imenik
 * @copyright   SoftClub Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Aleksandar <aca_fpi@hotmail.com> - http://softclub.rs
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_imenik')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('Imenik');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
