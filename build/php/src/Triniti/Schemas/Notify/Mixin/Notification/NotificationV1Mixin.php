<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\Notification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Notify\NotificationId;

final class NotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:notification:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return NotificationId::generate(); })
                ->className(NotificationId::class)
                ->overridable(true)
                ->build(),
            /*
             * A reference to the app to send the notification.
             */
            Fb::create('app_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A customize alert text of the notification. It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('customize_alert_text', T\TextType::create())
                ->maxLength(5000)
                ->build(),
        ];
    }
}
