<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/document-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\DocumentBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class DocumentBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:document-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('launch_text', T\StringType::create())
                ->build(),
            /*
             * An optional reference to an image asset to use as the poster.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * For imported document blocks it may be necessary to store the old URL.
             */
            Fb::create('fallback_src_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
        ];
    }
}
