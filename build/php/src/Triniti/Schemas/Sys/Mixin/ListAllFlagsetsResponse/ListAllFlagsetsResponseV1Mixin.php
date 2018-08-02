<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/list-all-flagsets-response/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\ListAllFlagsetsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ListAllFlagsetsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:list-all-flagsets-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('flagsets', T\IdentifierType::create())
                ->asASet()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
