<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/get-all-channels-request/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\GetAllChannelsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetAllChannelsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:get-all-channels-request:1-0-0');
    }
}
