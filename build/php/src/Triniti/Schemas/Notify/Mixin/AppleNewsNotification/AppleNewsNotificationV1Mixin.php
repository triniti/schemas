<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/apple-news-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\AppleNewsNotification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class AppleNewsNotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:apple-news-notification:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
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
             * The existing revision token for the Apple News article.
             * e.g. AAAAAAAAAAAAAAAAAAAAAQ==
             */
            Fb::create('apple_news_revision', T\StringType::create())
                ->pattern('^[\w\\\/\.:=-]+$')
                ->build(),
        ];
    }
}
