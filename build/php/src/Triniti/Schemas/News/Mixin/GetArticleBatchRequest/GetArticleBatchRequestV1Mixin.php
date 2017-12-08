<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/get-article-batch-request/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\GetArticleBatchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class GetArticleBatchRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:get-article-batch-request:1-0-0');
    }
}
