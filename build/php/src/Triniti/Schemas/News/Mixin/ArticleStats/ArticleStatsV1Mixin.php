<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-stats/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\ArticleStats;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\News\ArticleId;

final class ArticleStatsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article-stats:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return ArticleId::generate(); })
                ->className(ArticleId::class)
                ->overridable(true)
                ->build(),
            Fb::create('comments', T\IntType::create())
                ->build(),
            Fb::create('fb_shares', T\IntType::create())
                ->build(),
            Fb::create('views', T\IntType::create())
                ->build(),
        ];
    }
}
