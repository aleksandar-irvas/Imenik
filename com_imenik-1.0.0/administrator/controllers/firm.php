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

jimport('joomla.application.component.controllerform');

/**
 * Firm controller class.
 */
class ImenikControllerFirm extends JControllerForm
{

    function __construct() {
        $this->view_list = 'firms';
        parent::__construct();
    }

}