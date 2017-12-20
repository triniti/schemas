<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/delete-poll/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\DeletePoll;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeletePollV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:delete-poll:1-0-0');
    }
}
