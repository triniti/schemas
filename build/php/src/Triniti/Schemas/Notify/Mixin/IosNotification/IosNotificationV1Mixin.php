<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/ios-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\IosNotification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class IosNotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:ios-notification:1-0-0');
    }
}
