<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/search-notifications-response/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\SearchNotificationsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Notify\Mixin\Notification\Notification as TrinitiNotifyNotification;

final class SearchNotificationsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:search-notifications-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiNotifyNotification::class,
                ])
                ->build(),
        ];
    }
}
