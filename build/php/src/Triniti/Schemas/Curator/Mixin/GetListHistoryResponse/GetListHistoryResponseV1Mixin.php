<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-list-history-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetListHistoryResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetListHistoryResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-list-history-response:1-0-0');
    }
}
