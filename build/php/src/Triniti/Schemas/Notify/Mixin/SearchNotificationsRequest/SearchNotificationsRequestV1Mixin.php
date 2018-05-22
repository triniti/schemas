<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/search-notifications-request/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\SearchNotificationsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
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
            Fb::create('is_unlisted', T\TrinaryType::create())
                ->withDefault(2)
                ->build(),
            Fb::create('sort', T\StringEnumType::create())
                ->withDefault(SearchNotificationsSort::RELEVANCE())
                ->className(SearchNotificationsSort::class)
                ->build(),
        ];
    }
}
