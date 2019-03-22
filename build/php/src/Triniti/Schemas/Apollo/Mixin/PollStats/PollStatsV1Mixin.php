<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-stats/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollStats;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Apollo\PollId;

final class PollStatsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-stats:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return PollId::generate(); })
                ->className(PollId::class)
                ->overridable(true)
                ->build(),
            Fb::create('votes', T\IntType::create())
                ->build(),
            /*
             * Map of votes for each answer keyed by the poll answer id.
             */
            Fb::create('answer_votes', T\IntType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
