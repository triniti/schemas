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
            Fb::create('views', T\IntType::create())
                ->build(),
            Fb::create('disqus_comments', T\IntType::create())
                ->build(),
            Fb::create('disqus_dislikes', T\IntType::create())
                ->build(),
            Fb::create('disqus_likes', T\IntType::create())
                ->build(),
            Fb::create('fb_comments', T\IntType::create())
                ->build(),
            Fb::create('fb_reactions', T\IntType::create())
                ->build(),
            Fb::create('fb_shares', T\IntType::create())
                ->build(),
            Fb::create('ga_entrances', T\IntType::create())
                ->build(),
            Fb::create('ga_entrance_rate', T\IntType::create())
                ->build(),
            Fb::create('ga_pageviews', T\IntType::create())
                ->build(),
            Fb::create('ga_unique_pageviews', T\IntType::create())
                ->build(),
            Fb::create('ga_time_on_page', T\IntType::create())
                ->build(),
            Fb::create('ga_avg_time_on_page', T\IntType::create())
                ->build(),
            Fb::create('ga_exits', T\IntType::create())
                ->build(),
            Fb::create('ga_exit_rate', T\IntType::create())
                ->build(),
        ];
    }
}
