<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-patched/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\AssetPatched;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class AssetPatchedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset-patched:1-0-0');
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
             * The names of the fields this patch event should apply changes to.
             */
            Fb::create('fields', T\StringType::create())
                ->asASet()
                ->pattern('^[a-zA-Z_]{1}[a-zA-Z0-9_]*$')
                ->build(),
            Fb::create('expires_at', T\DateTimeType::create())
                ->build(),
            Fb::create('credit', T\StringType::create())
                ->build(),
        ];
    }
}
