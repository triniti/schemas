<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video-deleted/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\VideoDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class VideoDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video-deleted:1-0-0');
    }
}
