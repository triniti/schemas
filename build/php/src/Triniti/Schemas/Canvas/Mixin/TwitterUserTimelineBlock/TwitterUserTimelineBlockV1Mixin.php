<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-user-timeline-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterUserTimelineBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterUserTimelineBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-user-timeline-block:1-0-0');
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
            Fb::create('tweet_limit', T\TinyIntType::create())
                ->min(1)
                ->max(20)
                ->withDefault(1)
                ->build(),
        ];
    }
}
