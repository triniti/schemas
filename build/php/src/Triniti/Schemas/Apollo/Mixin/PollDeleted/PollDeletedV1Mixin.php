<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-deleted/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PollDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-deleted:1-0-0');
    }
}
