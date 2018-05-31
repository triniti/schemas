<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/has-notifications/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\HasNotifications;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class HasNotificationsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:has-notifications:1-0-0');
    }
}
