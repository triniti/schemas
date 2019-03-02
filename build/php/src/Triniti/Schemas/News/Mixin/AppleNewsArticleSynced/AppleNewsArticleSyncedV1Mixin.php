<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/apple-news-article-synced/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\AppleNewsArticleSynced;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class AppleNewsArticleSyncedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:apple-news-article-synced:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A reference to the article that was synced.
             */
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            /*
             * A reference to the notification that caused the sync to take place.
             */
            Fb::create('notification_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            Fb::create('apple_news_operation', T\StringType::create())
                ->pattern('^(create|update|delete)$')
                ->build(),
            /*
             * The unique identifier of the Apple News article.
             */
            Fb::create('apple_news_id', T\UuidType::create())
                ->useTypeDefault(false)
                ->build(),
            /*
             * The new revision token for the Apple News article.
             * e.g. AAAAAAAAAAAAAAAAAAAAAQ==
             */
            Fb::create('apple_news_revision', T\StringType::create())
                ->pattern('^[\w\\\/\.:=-]+$')
                ->build(),
            Fb::create('apple_news_share_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
        ];
    }
}
