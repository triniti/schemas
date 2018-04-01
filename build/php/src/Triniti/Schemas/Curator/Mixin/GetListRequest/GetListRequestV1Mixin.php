<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-list-request/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetListRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetListRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-list-request:1-0-0');
    }
}
