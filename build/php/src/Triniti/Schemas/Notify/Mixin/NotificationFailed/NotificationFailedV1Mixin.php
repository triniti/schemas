<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification-failed/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\NotificationFailed;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Notify\NotifierResult as TrinitiNotifyNotifierResult;

final class NotificationFailedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:notification-failed:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('notifier_result', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiNotifyNotifierResult::class,
                ])
                ->build(),
        ];
    }
}