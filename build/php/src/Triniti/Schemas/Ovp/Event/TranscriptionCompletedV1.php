<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/event/transcription-completed/1-0-0.json#
namespace Triniti\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\NodeRef;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;

final class TranscriptionCompletedV1 extends AbstractMessage implements
    TranscriptionCompleted,
    GdbotsPbjxEventV1,
    GdbotsCommonTaggableV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp:event:transcription-completed:1-0-0', __CLASS__,
            [
                /*
                 * A reference to the video asset that was transcribed.
                 */
                Fb::create('node_ref', T\IdentifierType::create())
                    ->required()
                    ->className(NodeRef::class)
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
                /*
                 * How long in seconds it took to produce a transcribed artifact.
                 */
                Fb::create('time_taken', T\SmallIntType::create())
                    ->build(),
            ],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
