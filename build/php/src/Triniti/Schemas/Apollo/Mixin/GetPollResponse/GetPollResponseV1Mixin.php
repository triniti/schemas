<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/get-poll-response/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\GetPollResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Apollo\Mixin\Poll\Poll as TrinitiApolloPoll;

final class GetPollResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:get-poll-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiApolloPoll::class,
                ])
                ->build(),
        ];
    }
}
