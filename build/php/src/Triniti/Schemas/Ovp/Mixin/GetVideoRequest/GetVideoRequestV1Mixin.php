<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/get-video-request/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\GetVideoRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetVideoRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:get-video-request:1-0-0');
    }
}
