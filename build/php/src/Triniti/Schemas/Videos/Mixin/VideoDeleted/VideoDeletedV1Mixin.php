<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/video-deleted/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\VideoDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class VideoDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:video-deleted:1-0-0');
    }
}
