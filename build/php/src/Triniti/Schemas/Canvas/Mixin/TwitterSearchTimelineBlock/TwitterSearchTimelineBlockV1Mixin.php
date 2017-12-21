<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-search-timeline-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterSearchTimelineBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterSearchTimelineBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-search-timeline-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('widget_id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('show_replies', T\BooleanType::create())
                ->build(),
            Fb::create('tweet_limit', T\TinyIntType::create())
                ->min(1)
                ->max(20)
                ->withDefault(1)
                ->build(),
        ];
    }
}
