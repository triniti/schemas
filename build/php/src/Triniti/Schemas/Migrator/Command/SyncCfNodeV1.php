<?php
// @link http://schemas.triniti.io/json-schema/triniti/migrator/command/sync-cf-node/1-0-0.json#
namespace Triniti\Schemas\Migrator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class SyncCfNodeV1 extends AbstractMessage implements
    SyncCfNode,
    GdbotsPbjxCommandV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:migrator:command:sync-cf-node:1-0-0', __CLASS__,
            [
                /*
                 * The CrowdFusion element slug.
                 */
                Fb::create('cf_element', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                /*
                 * The CrowdFusion node slug.
                 */
                Fb::create('cf_slug', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
            ]
        );
    }
}
