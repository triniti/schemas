<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/expire-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ExpireTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ExpireTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:expire-teaser:1-0-0');
    }
}
