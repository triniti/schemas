<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/mark-article-as-draft/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\MarkArticleAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkArticleAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:mark-article-as-draft:1-0-0');
    }
}
