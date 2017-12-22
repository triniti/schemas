<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/mark-asset-as-pending/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\MarkAssetAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkAssetAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:mark-asset-as-pending:1-0-0');
    }
}
