<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-marked-as-pending/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollMarkedAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PollMarkedAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-marked-as-pending:1-0-0');
    }
}
