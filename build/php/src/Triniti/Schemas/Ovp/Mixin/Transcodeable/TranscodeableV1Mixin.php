<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/transcodeable/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\Transcodeable;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Ovp\Enum\TranscodingStatus;

final class TranscodeableV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:transcodeable:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('transcoding_status', T\StringEnumType::create())
                ->className(TranscodingStatus::class)
                ->build(),
        ];
    }
}
