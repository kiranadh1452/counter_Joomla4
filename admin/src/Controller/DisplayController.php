<?php

namespace KiranAdhikari\Component\Counter\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_counter
 *
 * @copyright   Copyright (C) 2022 Kiran Adhikari. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Default Controller of Counter component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_counter
 */
class DisplayController extends BaseController
{
    /**
     * The default view for the display method.
     *
     * @var string
     */
    protected $default_view = 'counter';

    public function display($cachable = false, $urlparams = array())
    {
        $document = Factory::getDocument();
        $viewName = $this->input->getCmd('view', 'counter');
        $viewFormat = $document->getType();

        $view = $this->getView($viewName, $viewFormat);
        $view->setModel($this->getModel('User'), true);

        $view->document = $document;
        $view->display();
    }

}
