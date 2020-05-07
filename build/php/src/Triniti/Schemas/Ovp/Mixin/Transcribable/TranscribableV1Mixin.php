<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/transcribable/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\Transcribable;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Ovp\Enum\TranscriptionStatus;

final class TranscribableV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:transcribable:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('transcription_status', T\StringEnumType::create())
                ->className(TranscriptionStatus::class)
                ->build(),
        ];
    }
}
