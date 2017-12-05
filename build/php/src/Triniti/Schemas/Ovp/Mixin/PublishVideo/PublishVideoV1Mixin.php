<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/publish-video/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\PublishVideo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PublishVideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:publish-video:1-0-0');
    }
}
