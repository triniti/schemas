<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/lock-article/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\LockArticle;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class LockArticleV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:lock-article:1-0-0');
    }
}