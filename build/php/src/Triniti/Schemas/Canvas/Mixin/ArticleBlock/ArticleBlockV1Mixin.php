<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/article-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\ArticleBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ArticleBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:article-block:1-0-0');
    }
}