<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\Article;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\News\NotificationId;

final class ArticleV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return NotificationId::generate(); })
                ->className(NotificationId::class)
                ->overridable(true)
                ->build(),
            Fb::create('is_homepage_news', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            Fb::create('allow_comments', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A description of the article (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            /*
             * A swipe (aka banner/label/overlay) is a short string used in a visual treatment
             * on the article. e.g. "Exclusive", "NSFW", "Breaking Bad Mojo".
             */
            Fb::create('swipe', T\StringType::create())
                ->build(),
            /*
             * An arbitrary classification that can be used to establish importance/rank/weight/etc.
             * with a human friendly label. e.g. "super-hero", "hero", "chud".
             */
            Fb::create('classification', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * Determines if AMP (Accelerated Mobile Pages) should be enabled for this article.
             */
            Fb::create('amp_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            /*
             * Determines if the related articles should render. This is intended as a flag
             * on blogroll/lists, not the permalink of an article where you'd always expect
             * to see the related articles.
             */
            Fb::create('show_related_articles', T\BooleanType::create())
                ->build(),
            Fb::create('related_articles_heading', T\StringType::create())
                ->build(),
            Fb::create('related_articles', T\IdentifierType::create())
                ->asAList()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
