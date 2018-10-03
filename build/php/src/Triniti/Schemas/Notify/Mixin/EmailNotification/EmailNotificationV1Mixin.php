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
             * keys are list slugs, e.g. "newsletter-subscribers".
             * used to lookup the sendgrid list Ids needed when posting to their API.
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
            Fb::create('sender', T\IntType::create())
                ->build(),
            /*
             * also called as unsubscribe list ID, sendgrid specifically calls this list as suppression list
             */
            Fb::create('suppression_group_id', T\IntType::create())
                ->build(),
        ];
    }
}
