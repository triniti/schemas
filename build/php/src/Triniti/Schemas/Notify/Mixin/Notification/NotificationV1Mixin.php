<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\Notification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Notify\Enum\SendStatus;
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
             * A body text of the notification. It should typically
             * not have HTML.
             */
            Fb::create('body', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            /*
             * A reference to the target message for the notification.
             */
            Fb::create('content_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('send_status', T\StringEnumType::create())
                ->withDefault(SendStatus::UNKNOWN())
                ->className(SendStatus::class)
                ->build(),
            Fb::create('send_at', T\DateTimeType::create())
                ->build(),
        ];
    }
}
