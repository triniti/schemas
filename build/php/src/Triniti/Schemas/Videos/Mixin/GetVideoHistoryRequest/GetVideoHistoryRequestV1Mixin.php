<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/get-video-history-request/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\GetVideoHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetVideoHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:get-video-history-request:1-0-0');
    }
}
