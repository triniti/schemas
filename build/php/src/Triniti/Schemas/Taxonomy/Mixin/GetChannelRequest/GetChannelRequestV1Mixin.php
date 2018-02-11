<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/get-channel-request/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\GetChannelRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetChannelRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:get-channel-request:1-0-0');
    }
}
