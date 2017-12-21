<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-moment-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterMomentBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterMomentBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-moment-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('title', T\StringType::create())
                ->build(),
            Fb::create('limit', T\TinyIntType::create())
                ->min(1)
                ->max(20)
                ->withDefault(1)
                ->build(),
        ];
    }
}
