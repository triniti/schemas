<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/rename-article/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\RenameArticle;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class RenameArticleV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:rename-article:1-0-0');
    }
}
