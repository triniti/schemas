<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-created/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollCreated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Apollo\Mixin\Poll\Poll as TrinitiApolloPoll;

final class PollCreatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-created:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiApolloPoll::class,
                ])
                ->build(),
        ];
    }
}
