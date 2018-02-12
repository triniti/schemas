<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/channel/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\Channel;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ChannelV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:channel:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A description of the channel (usually a few sentences). It should typically
             * not have HTML as it is used in metadata.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
        ];
    }
}
