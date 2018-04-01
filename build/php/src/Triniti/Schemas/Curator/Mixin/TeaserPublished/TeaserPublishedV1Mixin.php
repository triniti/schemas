<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-published/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TeaserPublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class TeaserPublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser-published:1-0-0');
    }
}
