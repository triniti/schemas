<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/get-article-history-request/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\GetArticleHistoryRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetArticleHistoryRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:get-article-history-request:1-0-0');
    }
}
