<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\Notification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Notify\Enum\NotificationSendStatus;
use Triniti\Schemas\Notify\NotificationId;
use Triniti\Schemas\Notify\NotifierResult as TrinitiNotifyNotifierResult;

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
             * A reference to the app this notification is being sent to.
             */
            Fb::create('app_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the content this notification will include.
             */
            Fb::create('content_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('send_status', T\StringEnumType::create())
                ->withDefault(NotificationSendStatus::UNKNOWN())
                ->className(NotificationSendStatus::class)
                ->build(),
            Fb::create('send_on_publish', T\BooleanType::create())
                ->build(),
            Fb::create('send_at', T\DateTimeType::create())
                ->build(),
            Fb::create('sent_at', T\DateTimeType::create())
                ->build(),
            /*
             * The body of the notification to use (format depends on app/platform). If present
             * this value should take precedence over the body derived from content_ref.
             */
            Fb::create('body', T\TextType::create())
                ->maxLength(2000)
                ->build(),
            Fb::create('notifier_result', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiNotifyNotifierResult::class,
                ])
                ->build(),
        ];
    }
}
