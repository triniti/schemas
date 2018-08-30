<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/search-articles-response/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\SearchArticlesResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\News\Mixin\Article\Article as TrinitiNewsArticle;

final class SearchArticlesResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:search-articles-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiNewsArticle::class,
                ])
                ->build(),
        ];
    }
}