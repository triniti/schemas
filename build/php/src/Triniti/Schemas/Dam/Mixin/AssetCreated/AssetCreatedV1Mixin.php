<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-created/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\AssetCreated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Dam\Mixin\Asset\Asset as TrinitiDamAsset;

final class AssetCreatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:asset-created:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiDamAsset::class,
                ])
                ->build(),
        ];
    }
}
