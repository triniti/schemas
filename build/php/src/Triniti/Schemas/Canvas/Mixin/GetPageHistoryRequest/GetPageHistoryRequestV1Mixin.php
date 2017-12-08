<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/get-page-history-request/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GetPageHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPageHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:get-page-history-request:1-0-0');
    }
}
