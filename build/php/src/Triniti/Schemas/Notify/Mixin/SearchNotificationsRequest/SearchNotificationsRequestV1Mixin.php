<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/search-notifications-request/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\SearchNotificationsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Notify\Enum\NotificationSendStatus;
use Triniti\Schemas\Notify\Enum\SearchNotificationsSort;

final class SearchNotificationsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:search-notifications-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchNotificationsSort::SENT_AT_DESC())
                ->className(SearchNotificationsSort::class)
                ->build(),
            /*
             * A set of notification types (node must match at least one) to include in
             * the search results, such as android-notification or ios-notification.
             */
            Fb::create('types', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
            Fb::create('send_status', T\StringEnumType::create())
                ->className(NotificationSendStatus::class)
                ->build(),
            /*
             * An app node ref that a notification must be linked with to match the search request.
             */
            Fb::create('app_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A content node ref that a notification must be linked with to match the search request.
             */
            Fb::create('content_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
