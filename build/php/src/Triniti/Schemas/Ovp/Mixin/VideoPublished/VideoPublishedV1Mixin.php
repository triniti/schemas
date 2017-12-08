<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video-published/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\VideoPublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class VideoPublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video-published:1-0-0');
    }
}
