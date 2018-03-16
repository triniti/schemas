<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-hashtag-button-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterHashtagButtonBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterHashtagButtonBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-hashtag-button-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('hashtag', T\StringType::create())
                ->required()
                ->format(Format::HASHTAG())
                ->build(),
            Fb::create('secondary_hashtags', T\StringType::create())
                ->asASet()
                ->format(Format::HASHTAG())
                ->build(),
            Fb::create('prefill_text', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('recommended_accounts', T\StringType::create())
                ->asASet()
                ->pattern('^[\w\.]+$')
                ->build(),
        ];
    }
}
