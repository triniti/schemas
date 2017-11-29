<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/expire-video/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\ExpireVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ExpireVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:expire-video:1-0-0');
    }
}
