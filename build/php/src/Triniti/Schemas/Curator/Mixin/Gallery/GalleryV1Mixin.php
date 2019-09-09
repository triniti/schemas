<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery/1-0-2.json#
namespace Triniti\Schemas\Curator\Mixin\Gallery;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\GalleryId;

final class GalleryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:gallery:1-0-2');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return GalleryId::generate(); })
                ->className(GalleryId::class)
                ->overridable(true)
                ->build(),
            /*
             * A reference to the image asset to use as the cover/primary.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A credit is a short string used to publicly acknowledge the source/creator
             * of the contents of this gallery. e.g. "Fox News", "CNN".
             */
            Fb::create('credit', T\StringType::create())
                ->build(),
            /*
             * A URL to link with the credit source.
             */
            Fb::create('credit_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('allow_comments', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            Fb::create('launch_text', T\StringType::create())
                ->build(),
            /*
             * Call to action URL to use with launch_text.
             */
            Fb::create('cta_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * A description of the gallery (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('image_count', T\MediumIntType::create())
                ->build(),
            /*
             * A reference to the previous gallery.
             */
            Fb::create('prev_gallery_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the next gallery.
             */
            Fb::create('next_gallery_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('related_gallery_refs', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
