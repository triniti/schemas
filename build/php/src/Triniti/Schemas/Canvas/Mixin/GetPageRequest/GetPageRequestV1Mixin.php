<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/get-page-request/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GetPageRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetPageRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:get-page-request:1-0-0');
    }
}