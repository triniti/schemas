<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-published/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollPublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PollPublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-published:1-0-0');
    }
}
