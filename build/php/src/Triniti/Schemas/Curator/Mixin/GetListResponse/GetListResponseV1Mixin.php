<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-list-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetListResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\List\List as TrinitiCuratorList;

final class GetListResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-list-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorList::class,
                ])
                ->build(),
        ];
    }
}
