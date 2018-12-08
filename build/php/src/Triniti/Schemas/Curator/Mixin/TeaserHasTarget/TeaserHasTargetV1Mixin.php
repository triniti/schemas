<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-has-target/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TeaserHasTarget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class TeaserHasTargetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser-has-target:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the target teaserable node this teaser is bound to.
             */
            Fb::create('target_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            /*
             * When true this teaser will automatically be updated to match the
             * target it is bound to whenever the target is modified.
             */
            Fb::create('sync_with_target', T\BooleanType::create())
                ->build(),
        ];
    }
}
