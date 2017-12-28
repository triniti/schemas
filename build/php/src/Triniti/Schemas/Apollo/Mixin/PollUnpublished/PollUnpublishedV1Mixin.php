<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-unpublished/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollUnpublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PollUnpublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll-unpublished:1-0-0');
    }
}
