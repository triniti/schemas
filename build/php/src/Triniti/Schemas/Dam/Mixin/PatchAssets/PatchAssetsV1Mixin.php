<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/patch-assets/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\PatchAssets;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PatchAssetsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:patch-assets:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('expires_at', T\DateTimeType::create())
                ->build(),
            Fb::create('credit', T\StringType::create())
                ->build(),
        ];
    }
}
