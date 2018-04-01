<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Gallery;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class GalleryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:gallery:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the image asset to use as the cover/primary.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('allow_comments', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * A description of the gallery (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('related_galleries', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
