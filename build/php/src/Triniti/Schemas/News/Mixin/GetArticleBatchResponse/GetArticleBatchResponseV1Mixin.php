<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/get-article-batch-response/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\GetArticleBatchResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\News\Mixin\Article\Article as TrinitiNewsArticle;

final class GetArticleBatchResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:get-article-batch-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAMap()
                ->anyOfClassNames([
                    TrinitiNewsArticle::class,
                ])
                ->build(),
        ];
    }
}
