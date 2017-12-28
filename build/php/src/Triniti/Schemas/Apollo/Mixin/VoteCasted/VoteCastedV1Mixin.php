<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/vote-casted/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\VoteCasted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class VoteCastedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:vote-casted:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('poll_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('answer_id', T\UuidType::create())
                ->build(),
        ];
    }
}
