<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/page-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PageTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PageTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:page-teaser:1-0-0');
    }
}