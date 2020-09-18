<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/android-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\AndroidNotification;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait AndroidNotificationV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->get('_id'),
        ];
    }
}
