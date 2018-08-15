<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/apple-news-notifier-result/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\AppleNewsNotifierResult;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class AppleNewsNotifierResultV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:apple-news-notifier-result:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('apple_news_article_id', T\TextType::create())
                ->pattern('^[a-z0-9-]+$')
                ->build(),
            Fb::create('apple_news_share_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('apple_news_revision_token', T\TextType::create())
                ->pattern('^[A-Za-z0-9=\/]+$')
                ->build(),
        ];
    }
}
