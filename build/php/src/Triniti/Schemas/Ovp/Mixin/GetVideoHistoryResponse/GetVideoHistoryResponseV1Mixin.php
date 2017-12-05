<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/get-video-history-response/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\GetVideoHistoryResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetVideoHistoryResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:get-video-history-response:1-0-0');
    }
}
