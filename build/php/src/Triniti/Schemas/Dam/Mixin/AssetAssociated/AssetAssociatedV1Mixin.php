<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-associated/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\AssetAssociated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class AssetAssociatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset-associated:1-0-0');
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
             * The node_ref to associate with the asset's node_ref.
             */
            Fb::create('associated_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
