<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/command/stop-channel/1-0-0.json#
namespace Triniti\Schemas\OvpMedialive\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class StopChannelV1 extends AbstractMessage implements
    StopChannel,
    GdbotsPbjxCommandV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp.medialive:command:stop-channel:1-0-0', __CLASS__,
            [
                Fb::create('channel_arn', T\StringType::create())
                    ->pattern('^[\w:-]+$')
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
            ]
        );
    }
}
