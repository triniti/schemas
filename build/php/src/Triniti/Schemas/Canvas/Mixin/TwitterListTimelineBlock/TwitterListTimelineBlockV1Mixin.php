<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-list-timeline-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterListTimelineBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterListTimelineBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-list-timeline-block:1-0-0');
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
            Fb::create('list_slug', T\StringType::create())
                ->required()
                ->format(Format::SLUG())
                ->build(),
            Fb::create('tweet_limit', T\TinyIntType::create())
                ->min(1)
                ->max(20)
                ->withDefault(1)
                ->build(),
        ];
    }
}
