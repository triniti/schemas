<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/search-polls-response/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\SearchPollsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Apollo\Mixin\PollStats\PollStats as TrinitiApolloPollStats;
use Triniti\Schemas\Apollo\Mixin\Poll\Poll as TrinitiApolloPoll;

final class SearchPollsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:search-polls-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiApolloPoll::class,
                    TrinitiApolloPollStats::class,
                ])
                ->build(),
        ];
    }
}
