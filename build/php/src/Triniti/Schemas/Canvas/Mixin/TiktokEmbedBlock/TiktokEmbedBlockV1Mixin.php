<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/tiktok-embed-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\TiktokEmbedBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TiktokEmbedBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:tiktok-embed-block:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('tiktok_id', T\StringType::create())
                ->required()
                ->pattern('^\w+$')
                ->build(),
            Fb::create('user_name', T\StringType::create())
                ->required()
                ->pattern('^\w+$')
                ->build(),
        ];
    }
}
