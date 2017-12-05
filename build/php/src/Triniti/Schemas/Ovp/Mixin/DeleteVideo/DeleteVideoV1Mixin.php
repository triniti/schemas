<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/delete-video/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\DeleteVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeleteVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:delete-video:1-0-0');
    }
}
