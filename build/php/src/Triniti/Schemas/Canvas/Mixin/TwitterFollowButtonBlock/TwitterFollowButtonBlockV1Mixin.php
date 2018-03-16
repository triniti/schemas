<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-follow-button-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TwitterFollowButtonBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TwitterFollowButtonBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:twitter-follow-button-block:1-0-0');
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
            Fb::create('show_screen_name', T\BooleanType::create())
                ->build(),
            Fb::create('show_count', T\BooleanType::create())
                ->build(),
        ];
    }
}
