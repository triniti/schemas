<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/command/update-transcoding-status/1-0-0.json#
namespace Triniti\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Enum\TranscodingStatus;

final class UpdateTranscodingStatusV1 extends AbstractMessage implements
    UpdateTranscodingStatus,
    GdbotsPbjxCommandV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp:command:update-transcoding-status:1-0-0', __CLASS__,
            [
                /*
                 * A reference to the video asset that is being transcoded.
                 */
                Fb::create('node_ref', T\IdentifierType::create())
                    ->required()
                    ->className(NodeRef::class)
                    ->build(),
                Fb::create('transcoding_status', T\StringEnumType::create())
                    ->className(TranscodingStatus::class)
                    ->build(),
                Fb::create('mediaconvert_job_arn', T\StringType::create())
                    ->pattern('^[\w:-]+$')
                    ->build(),
                Fb::create('error_message', T\TextType::create())
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
            ]
        );
    }
}
