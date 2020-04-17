<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/transcription-completed/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\TranscriptionCompleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class TranscriptionCompletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:transcription-completed:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the video that was transcribed.
             */
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('transcription_job_identifier', T\StringType::create())
                ->pattern('^[\w:-]+$')
                ->build(),
        ];
    }
}
