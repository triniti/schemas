<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-teaser-history-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetTeaserHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetTeaserHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-teaser-history-request:1-0-0');
    }
}
