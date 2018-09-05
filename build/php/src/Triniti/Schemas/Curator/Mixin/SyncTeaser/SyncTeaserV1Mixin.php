<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/sync-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SyncTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class SyncTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:sync-teaser:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the target - every teaser that teases this target
             * will be synced (if set to sync_with_target).
             */
            Fb::create('target_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the teaser that will be synced to its target.
             */
            Fb::create('teaser_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
