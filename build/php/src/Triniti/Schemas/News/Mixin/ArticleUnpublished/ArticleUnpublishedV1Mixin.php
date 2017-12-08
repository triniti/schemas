<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-unpublished/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\ArticleUnpublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ArticleUnpublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article-unpublished:1-0-0');
    }
}
