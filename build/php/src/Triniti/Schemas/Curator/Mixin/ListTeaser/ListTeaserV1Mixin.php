<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/list-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ListTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ListTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:list-teaser:1-0-0');
    }
}
