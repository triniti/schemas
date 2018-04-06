<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/article-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ArticleTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ArticleTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:article-teaser:1-0-0');
    }
}
