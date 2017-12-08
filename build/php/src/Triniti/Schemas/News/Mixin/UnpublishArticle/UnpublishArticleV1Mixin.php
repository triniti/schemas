<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/unpublish-article/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\UnpublishArticle;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishArticleV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:unpublish-article:1-0-0');
    }
}
