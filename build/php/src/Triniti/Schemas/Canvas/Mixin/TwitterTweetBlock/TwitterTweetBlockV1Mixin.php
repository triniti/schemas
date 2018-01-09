<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-tweet-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterTweetBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterTweetBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-tweet-block:1-0-0');
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
            Fb::create('tweet_id', T\StringType::create())
                ->required()
                ->pattern('^\d+$')
                ->build(),
            Fb::create('tweet_text', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('hide_media', T\BooleanType::create())
                ->build(),
            Fb::create('hide_thread', T\BooleanType::create())
                ->build(),
        ];
    }
}
