<?php

namespace KiranAdhikari\Component\Counter\Administrator\Model;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Site
 * @subpackage  com_counter
 *
 * @copyright   Copyright (C) 2022 Kiran Adhikari. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * User Model
 */
class UserModel extends ItemModel {

    /**
     * Returns a message for display
     * @return object Message object
     */
    public function getItem($pk = null): object
    {
        $user = new \stdClass();
        $user->name = Text::_('COM_COUNTER_USER');
        return $user;
    }

}
