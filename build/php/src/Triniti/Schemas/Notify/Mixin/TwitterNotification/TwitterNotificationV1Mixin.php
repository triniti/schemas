<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/twitter-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\TwitterNotification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class TwitterNotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:twitter-notification:1-0-0');
    }
}
