<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/command/sync-entry/1-0-0.json#
namespace Triniti\Schemas\OvpKaltura\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\OvpKaltura\Caption as TrinitiOvpKalturaCaption;
use Triniti\Schemas\OvpKaltura\Entry as TrinitiOvpKalturaEntry;
use Triniti\Schemas\OvpKaltura\Flavor as TrinitiOvpKalturaFlavor;

final class SyncEntryV1 extends AbstractMessage implements
    SyncEntry,
    GdbotsPbjxCommandV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp.kaltura:command:sync-entry:1-0-0', __CLASS__,
            [
                Fb::create('entry', T\MessageType::create())
                    ->anyOfClassNames([
                        TrinitiOvpKalturaEntry::class,
                    ])
                    ->build(),
                Fb::create('flavors', T\MessageType::create())
                    ->asAList()
                    ->anyOfClassNames([
                        TrinitiOvpKalturaFlavor::class,
                    ])
                    ->build(),
                Fb::create('captions', T\MessageType::create())
                    ->asAList()
                    ->anyOfClassNames([
                        TrinitiOvpKalturaCaption::class,
                    ])
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
            ]
        );
    }
}
