<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-locked/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\ArticleLocked;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ArticleLockedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article-locked:1-0-0');
    }
}
