<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video-scheduled/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\VideoScheduled;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class VideoScheduledV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video-scheduled:1-0-0');
    }
}
