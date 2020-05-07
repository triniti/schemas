<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/command/update-transcription-status/1-0-0.json#
namespace Triniti\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\NodeRef;
use Gdbots\Schemas\Pbjx\Enum\Code;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Enum\TranscriptionStatus;

final class UpdateTranscriptionStatusV1 extends AbstractMessage implements
    UpdateTranscriptionStatus,
    GdbotsPbjxCommandV1,
    GdbotsCommonTaggableV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp:command:update-transcription-status:1-0-0', __CLASS__,
            [
                /*
                 * A reference to the video asset that is being transcribed.
                 */
                Fb::create('node_ref', T\IdentifierType::create())
                    ->required()
                    ->className(NodeRef::class)
                    ->build(),
                Fb::create('transcription_status', T\StringEnumType::create())
                    ->className(TranscriptionStatus::class)
                    ->build(),
                Fb::create('transcribe_job_name', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('transcribe_job_region', T\StringType::create())
                    ->maxLength(20)
                    ->format(Format::SLUG())
                    ->build(),
                Fb::create('language_code', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('error_code', T\IntEnumType::create())
                    ->className(Code::class)
                    ->build(),
                Fb::create('error_message', T\TextType::create())
                    ->build(),
            ],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
