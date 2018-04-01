<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-gallery-history-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetGalleryHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetGalleryHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-gallery-history-request:1-0-0');
    }
}
