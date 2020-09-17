<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/browser-notification/1-0-2.json#
namespace Triniti\Schemas\Notify\Mixin\BrowserNotification;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait BrowserNotificationV1Mixin
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
