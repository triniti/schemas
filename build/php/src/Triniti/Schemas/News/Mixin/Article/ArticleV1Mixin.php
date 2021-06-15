<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article/1-0-4.json#
namespace Triniti\Schemas\News\Mixin\Article;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\News\ArticleId;

final class ArticleV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article:1-0-4');
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
            Fb::create('is_homepage_news', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * A map of integers, e.g. {home: 1, sports: 5, tv: 9}, that determine where
             * articles will render in lists that use slotting. We call it slotting vs
             * sticky or pinning as that is generally just one at a time.
             */
            Fb::create('slotting', T\TinyIntType::create())
                ->asAMap()
                ->build(),
            Fb::create('allow_comments', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * A reference to the author of the article.
             */
            Fb::create('author_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * An arbitrary classification that can be used to establish importance/rank/weight/etc.
             * with a human friendly label. e.g. "super-hero", "hero", "chud".
             */
            Fb::create('classification', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            Fb::create('word_count', T\SmallIntType::create())
                ->build(),
            /*
             * Determines if AMP (Accelerated Mobile Pages) should be enabled for this article.
             */
            Fb::create('amp_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * Determines if SmartNews should be enabled for this article.
             */
            Fb::create('smartnews_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * Determines if Apple News should be enabled for this article.
             */
            Fb::create('apple_news_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * The unique identifier of the Apple News article.
             */
            Fb::create('apple_news_id', T\UuidType::create())
                ->useTypeDefault(false)
                ->build(),
            /*
             * The current revision token for the Apple News article.
             * e.g. AAAAAAAAAAAAAAAAAAAAAQ==
             */
            Fb::create('apple_news_revision', T\StringType::create())
                ->pattern('^[\w\/\.\\\:=+-]+$')
                ->build(),
            Fb::create('apple_news_share_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * Timestamp when Apple News was last updated at.
             */
            Fb::create('apple_news_updated_at', T\TimestampType::create())
                ->useTypeDefault(false)
                ->build(),
            /*
             * Determines if Facebook Instant Articles should be enabled for this article.
             */
            Fb::create('facebook_instant_articles_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * Determines if a twitter notification should be automatically created when
             * this article is published.
             */
            Fb::create('twitter_publish_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * Determines if the related articles should render. This is intended as a flag
             * on blogroll/lists, not the permalink of an article where you'd always expect
             * to see the related articles.
             */
            Fb::create('show_related_articles', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            Fb::create('related_articles_heading', T\StringType::create())
                ->build(),
            Fb::create('related_article_refs', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
