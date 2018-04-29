<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/imgur-post-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\ImgurPostBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class ImgurPostBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:imgur-post-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('id', T\StringType::create())
                ->required()
                ->pattern('^[\w\/-]+$')
                ->build(),
            /*
             * When true, shows the post details.
             */
            Fb::create('show_context', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
        ];
    }
}
