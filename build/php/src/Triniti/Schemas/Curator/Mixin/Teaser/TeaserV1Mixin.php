<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser/1-0-2.json#
namespace Triniti\Schemas\Curator\Mixin\Teaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\TeaserId;

final class TeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser:1-0-2');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return TeaserId::generate(); })
                ->className(TeaserId::class)
                ->overridable(true)
                ->build(),
            /*
             * Determines the sequence that this teaser node will be rendered
             * in lists, search results, etc. It DOES NOT control visibility or
             * publishing. A date was used over an integer (e.g. seq_no) for
             * blog-like, reverse chronological, clarity in sorting.
             */
            Fb::create('order_date', T\DateTimeType::create())
                ->build(),
            /*
             * A map of integers, e.g. {home: 1, sports: 5, tv: 9}, that determine where
             * teasers will render in lists that use slotting. We call it slotting vs
             * sticky or pinning as that is generally just one at a time.
             */
            Fb::create('slotting', T\TinyIntType::create())
                ->asAMap()
                ->build(),
            /*
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A description of the teaser (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            /*
             * Text to be used to caption the teaser.
             */
            Fb::create('caption', T\StringType::create())
                ->build(),
            /*
             * Text to be used for the call to action.
             */
            Fb::create('cta_text', T\StringType::create())
                ->build(),
            /*
             * Text to be used to credit the teaser source.
             */
            Fb::create('credit', T\StringType::create())
                ->build(),
            /*
             * URL to be used to link to the teaser source.
             */
            Fb::create('credit_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('gallery_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('timeline_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
