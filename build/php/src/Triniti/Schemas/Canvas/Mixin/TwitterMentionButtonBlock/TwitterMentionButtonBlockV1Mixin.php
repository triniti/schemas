<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-mention-button-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterMentionButtonBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterMentionButtonBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-mention-button-block:1-0-0');
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
