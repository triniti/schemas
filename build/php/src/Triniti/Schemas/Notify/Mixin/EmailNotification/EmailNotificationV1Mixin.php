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
             * A set of list ids that this email notification should be sent to.
             * e.g. "sports-fans", "foodies" or "chud".
             */
            Fb::create('lists', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
            /*
             * Visual layout for the email. e.g. "breaking-snooze", "exclusive-video".
             */
            Fb::create('template', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            Fb::create('sender', T\StringType::create())
                ->format(Format::EMAIL())
                ->build(),
        ];
    }
}
