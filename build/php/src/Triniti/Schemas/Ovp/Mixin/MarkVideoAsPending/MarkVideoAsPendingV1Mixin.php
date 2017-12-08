<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/mark-video-as-pending/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\MarkVideoAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkVideoAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:mark-video-as-pending:1-0-0');
    }
}
