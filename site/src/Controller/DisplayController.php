<?php

namespace KiranAdhikari\Component\Counter\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;

/**
 * @package     Joomla.Site
 * @subpackage  com_counter
 *
 * @copyright   Copyright (C) 2022 Kiran Adhikari. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Counter component controller
 */
class DisplayController extends BaseController {
    
  public function display($cachable = false, $urlparams = array()) {        
      $document = Factory::getDocument();
      $viewName = $this->input->getCmd('view', 'login');
      $viewFormat = $document->getType();
      
      $view = $this->getView($viewName, $viewFormat);
      $view->setModel($this->getModel('Message'), true);
      
      $view->document = $document;
      $view->display();
  }
  
}