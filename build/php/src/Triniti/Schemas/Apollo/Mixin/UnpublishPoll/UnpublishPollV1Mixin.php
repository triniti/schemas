<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/unpublish-poll/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\UnpublishPoll;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishPollV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:unpublish-poll:1-0-0');
    }
}
