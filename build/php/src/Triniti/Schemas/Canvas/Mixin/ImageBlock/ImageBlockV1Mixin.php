<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/image-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\ImageBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class ImageBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:image-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('caption', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('is_nsfw', T\BooleanType::create())
                ->build(),
            Fb::create('url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * For imported image blocks it may be necessary to store the old URL.
             */
            Fb::create('fallback_src_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
        ];
    }
}
