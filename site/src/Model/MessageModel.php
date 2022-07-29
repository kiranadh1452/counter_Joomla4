<?php

namespace KiranAdhikari\Component\Counter\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Model\ItemModel;

/**
 * @package     Joomla.Site
 * @subpackage  com_counter
 *
 * @copyright   Copyright (C) 2022 Kiran Adhikari. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Message Model
 */
class MessageModel extends ItemModel
{

    /**
     * Returns a message for display
     * @param integer $pk Primary key of the "message item", currently unused
     * @return object Message object
     */
    public function getItem($pk = null): object
    {
        $input = Factory::getApplication()->getInput();
        $greetingType = $input->getInt('greetingType', 1);

        $item = new \stdClass();
        // $item->message = Text::_('COM_COUNTER_MSG_GREETING');

        switch ($greetingType) {
            case 2:
                $item->message = Text::_('COM_COUNTER_GREETING_TYPE_BYE_MSG');
                break;

            case 1:
            default:
                $item->message = Text::_('COM_COUNTER_GREETING_TYPE_WELCOME_MSG');
                break;
        }

        return $item;
    }

}
