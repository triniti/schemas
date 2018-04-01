<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-gallery-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetGalleryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetGalleryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-gallery-request:1-0-0');
    }
}
