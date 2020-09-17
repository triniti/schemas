<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/sms-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\SmsNotification;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SmsNotificationV1Mixin
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
