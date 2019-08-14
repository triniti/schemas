<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\Block;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class BlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:block:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('etag', T\StringType::create())
                ->maxLength(100)
                ->pattern('^[\w\.:-]+$')
                ->build(),
            /*
             * In rendering environments that support HTML the css_class
             * can be appended to the dom elements' class attribute.
             */
            Fb::create('css_class', T\StringType::create())
                ->pattern('^[\w\s-]+$')
                ->build(),
            /*
             * Represents an update that occurred on the node this block
             * is attached to. DOES NOT indicate an update to the block itself.
             * eg an article with a twitter block with updated_date means that
             * the article was updated to include that twitter block.
             */
            Fb::create('updated_date', T\DateTimeType::create())
                ->build(),
            /*
             * When true it means this block represents a portion of a document
             * whose content is only indirectly related to the document's main content.
             * Asides are frequently presented as sidebars or call-out boxes.
             */
            Fb::create('aside', T\BooleanType::create())
                ->build(),
        ];
    }
}
