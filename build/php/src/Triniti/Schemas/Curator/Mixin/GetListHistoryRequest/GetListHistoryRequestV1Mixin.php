<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-list-history-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetListHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetListHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-list-history-request:1-0-0');
    }
}
