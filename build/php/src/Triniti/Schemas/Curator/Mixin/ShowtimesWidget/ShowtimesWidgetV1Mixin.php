<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/showtimes-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ShowtimesWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ShowtimesWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:showtimes-widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('show', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            Fb::create('include_latest_episode', T\BooleanType::create())
                ->build(),
            Fb::create('include_latest_promo', T\BooleanType::create())
                ->build(),
            Fb::create('headline', T\StringType::create())
                ->build(),
            Fb::create('excerpt', T\TextType::create())
                ->build(),
            /*
             * A reference to the image asset to use.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}