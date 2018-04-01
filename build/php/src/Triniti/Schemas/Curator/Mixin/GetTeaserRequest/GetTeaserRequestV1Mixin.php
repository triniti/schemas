<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-teaser-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetTeaserRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetTeaserRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-teaser-request:1-0-0');
    }
}
