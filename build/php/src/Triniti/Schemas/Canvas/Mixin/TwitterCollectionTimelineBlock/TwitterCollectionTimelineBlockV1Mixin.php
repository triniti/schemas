<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-collection-timeline-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterCollectionTimelineBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterCollectionTimelineBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-collection-timeline-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('screen_name', T\StringType::create())
                ->required()
                ->pattern('^[\w\.]+$')
                ->build(),
            Fb::create('collection_id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('collection_title', T\StringType::create())
                ->build(),
            Fb::create('tweet_limit', T\TinyIntType::create())
                ->min(1)
                ->max(20)
                ->withDefault(1)
                ->build(),
            Fb::create('grid_view', T\BooleanType::create())
                ->build(),
        ];
    }
}
