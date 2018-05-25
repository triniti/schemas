<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification-sent/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\NotificationSent;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class NotificationSentV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:notification-sent:1-0-0');
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
            /*
             * When a notification is sent the platform/vendor often responds with a payload
             * that may be needed to update our system, e.g. Apple News return an id and revision
             * that will be needed on future updates to the same content. This field
             * should contain a (de)serializable string, JSON is preferred.
             */
            Fb::create('response', T\TextType::create())
                ->build(),
        ];
    }
}
