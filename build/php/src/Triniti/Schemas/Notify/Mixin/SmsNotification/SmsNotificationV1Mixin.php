<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/sms-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\SmsNotification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class SmsNotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:sms-notification:1-0-0');
    }
}
