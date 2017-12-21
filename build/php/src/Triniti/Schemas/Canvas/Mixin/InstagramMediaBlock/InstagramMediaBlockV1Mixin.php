<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/instagram-media-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\InstagramMediaBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class InstagramMediaBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:instagram-media-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('id', T\StringType::create())
                ->required()
                ->pattern('^[\w-]+$')
                ->build(),
            Fb::create('hidecaption', T\BooleanType::create())
                ->build(),
        ];
    }
}
