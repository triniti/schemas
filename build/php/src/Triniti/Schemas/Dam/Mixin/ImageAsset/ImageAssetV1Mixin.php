<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/image-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\ImageAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class ImageAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:image-asset:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The image width in pixels
             */
            Fb::create('width', T\MediumIntType::create())
                ->build(),
            /*
             * The image height in pixels
             */
            Fb::create('height', T\MediumIntType::create())
                ->build(),
        ];
    }
}
