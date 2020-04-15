<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/article-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\ArticleBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ArticleBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:article-block:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('cta_text', T\StringType::create())
                ->build(),
            Fb::create('link_text', T\StringType::create())
                ->build(),
            Fb::create('show_image', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * An optional reference to an image asset to use as the poster.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
