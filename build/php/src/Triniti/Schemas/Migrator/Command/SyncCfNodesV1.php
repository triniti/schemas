<?php
// @link http://schemas.triniti.io/json-schema/triniti/migrator/command/sync-cf-nodes/1-0-0.json#
namespace Triniti\Schemas\Migrator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class SyncCfNodesV1 extends AbstractMessage implements
    SyncCfNodes,
    GdbotsPbjxCommandV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:migrator:command:sync-cf-nodes:1-0-0', __CLASS__,
            [
                /*
                 * An array of CrowdFusion node refs with format element:slug.
                 */
                Fb::create('cf_node_refs', T\StringType::create())
                    ->asAList()
                    ->pattern('^[a-z0-9-]+:[a-z0-9\/-]+$')
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
            ]
        );
    }
}
