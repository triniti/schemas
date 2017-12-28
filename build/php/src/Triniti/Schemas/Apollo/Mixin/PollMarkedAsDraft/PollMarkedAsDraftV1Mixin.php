<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-marked-as-draft/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollMarkedAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PollMarkedAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-marked-as-draft:1-0-0');
    }
}
