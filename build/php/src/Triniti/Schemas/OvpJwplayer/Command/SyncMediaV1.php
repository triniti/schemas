<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.jwplayer/command/sync-media/1-0-1.json#
namespace Triniti\Schemas\OvpJwplayer\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class SyncMediaV1 extends AbstractMessage implements
    SyncMedia,
    GdbotsPbjxCommandV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp.jwplayer:command:sync-media:1-0-1', __CLASS__,
            [
                Fb::create('node_ref', T\IdentifierType::create())
                    ->required()
                    ->className(NodeRef::class)
                    ->build(),
                /*
                 * Auxiliary (e.g. thumbnail, captions, etc) jwplayer fields to sync. A field is
                 * considered to be auxiliary if it cannot be updated using the standard "update video"
                 * api call. If empty, all auxiliary fields will be synced.
                 */
                Fb::create('fields', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w-]+$')
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
            ]
        );
    }
}
