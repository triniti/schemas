<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-answer/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollAnswer;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PollAnswerV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-answer:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\UuidType::create())
                ->required()
                ->build(),
            Fb::create('title', T\StringType::create())
                ->build(),
            Fb::create('url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('initial_votes', T\IntType::create())
                ->build(),
        ];
    }
}
