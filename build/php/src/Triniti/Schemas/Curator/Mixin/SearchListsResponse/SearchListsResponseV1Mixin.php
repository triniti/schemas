<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-lists-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchListsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\List\List as TrinitiCuratorList;

final class SearchListsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:search-lists-response:1-0-0');
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
                    TrinitiCuratorList::class,
                ])
                ->build(),
        ];
    }
}