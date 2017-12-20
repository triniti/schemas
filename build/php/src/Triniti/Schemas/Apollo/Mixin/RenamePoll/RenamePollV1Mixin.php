<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/rename-poll/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\RenamePoll;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class RenamePollV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:rename-poll:1-0-0');
    }
}
