<?php

namespace Triniti\Schemas\Notify\Mixin\EmailNotification;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait EmailNotificationV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'sender' => $this->get('sender'),
            'template' => $this->get('template'),
        ];
    }
}
