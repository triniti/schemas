<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/expire-poll/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\ExpirePoll;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ExpirePollV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:expire-poll:1-0-0');
    }
}
