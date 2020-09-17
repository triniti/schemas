<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/slack-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\SlackNotification;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SlackNotificationV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
        ];
    }
}
