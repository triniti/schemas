<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/delete-video/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\DeleteVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeleteVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:delete-video:1-0-0');
    }
}
