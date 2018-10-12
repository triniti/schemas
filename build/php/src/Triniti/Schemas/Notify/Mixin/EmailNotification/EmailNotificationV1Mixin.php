<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/email-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\EmailNotification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class EmailNotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:email-notification:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * Keys are list slugs, e.g. "newsletter-subscribers" and values are sendgrid list ids.
             * @link https://sendgrid.api-docs.io/v3.0/contacts-api-lists/create-a-list
             */
            Fb::create('lists', T\IntType::create())
                ->asAMap()
                ->build(),
            /*
             * Visual layout for the email. e.g. "breaking-news", "exclusive-video".
             */
            Fb::create('template', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            /*
             * Sendgrid sender id.
             */
            Fb::create('sender', T\IntType::create())
                ->build(),
        ];
    }
}
