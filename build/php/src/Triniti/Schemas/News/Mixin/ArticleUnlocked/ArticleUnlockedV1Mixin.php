<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-unlocked/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\ArticleUnlocked;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ArticleUnlockedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article-unlocked:1-0-0');
    }
}
