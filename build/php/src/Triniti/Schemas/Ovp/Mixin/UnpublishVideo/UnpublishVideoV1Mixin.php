<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/unpublish-video/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\UnpublishVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:unpublish-video:1-0-0');
    }
}
