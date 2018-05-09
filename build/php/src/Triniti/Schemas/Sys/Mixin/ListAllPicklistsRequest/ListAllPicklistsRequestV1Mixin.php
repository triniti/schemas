<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/list-all-picklists-request/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\ListAllPicklistsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListAllPicklistsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:list-all-picklists-request:1-0-0');
    }
}
