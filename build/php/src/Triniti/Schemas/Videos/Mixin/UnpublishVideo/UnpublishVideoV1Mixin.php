<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/unpublish-video/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\UnpublishVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:unpublish-video:1-0-0');
    }
}
