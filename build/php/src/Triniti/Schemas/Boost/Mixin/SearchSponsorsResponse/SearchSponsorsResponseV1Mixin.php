<?php
// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/search-sponsors-response/1-0-0.json#
namespace Triniti\Schemas\Boost\Mixin\SearchSponsorsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Boost\Mixin\Sponsor\Sponsor as TrinitiBoostSponsor;

final class SearchSponsorsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:boost:mixin:search-sponsors-response:1-0-0');
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
                    TrinitiBoostSponsor::class,
                ])
                ->build(),
        ];
    }
}
