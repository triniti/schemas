<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/image-asset/1-0-1.json#
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
        return SchemaId::fromString('pbj:triniti:dam:mixin:image-asset:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * Alternate text for an image, if the image cannot be displayed or seen.
             */
            Fb::create('alt_text', T\TextType::create())
                ->build(),
            /*
             * The image width in pixels.
             */
            Fb::create('width', T\SmallIntType::create())
                ->build(),
            /*
             * The image height in pixels.
             */
            Fb::create('height', T\SmallIntType::create())
                ->build(),
        ];
    }
}
