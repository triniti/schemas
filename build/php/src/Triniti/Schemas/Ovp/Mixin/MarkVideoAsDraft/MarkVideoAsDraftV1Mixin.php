<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/mark-video-as-draft/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\MarkVideoAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkVideoAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:mark-video-as-draft:1-0-0');
    }
}
