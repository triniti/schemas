<?php

namespace Triniti\Schemas\Users\Mixin\User;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class UserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:users:mixin:user:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('first_name', T\StringType::create())
                ->build(),
            Fb::create('last_name', T\StringType::create())
                ->build(),
            Fb::create('email', T\StringType::create())
                ->format(Format::EMAIL())
                ->build(),
            Fb::create('email_domain', T\StringType::create())
                ->format(Format::HOSTNAME())
                ->build(),
            /*
             * A general format for international telephone numbers.
             * @link https://en.wikipedia.org/wiki/E.164
             */
            Fb::create('phone', T\StringType::create())
                ->asAMap()
                ->pattern('^\+?[1-9]\d{1,14}$')
                ->build(),
            /*
             * Networks is a map that contains handles/usernames on a social network.
             * E.g. facebook:homer, twitter:stackoverflow, youtube:coltrane78.
             */
            Fb::create('networks', T\StringType::create())
                ->asAMap()
                ->maxLength(50)
                ->pattern('^[\w\.-]+$')
                ->build(),
            Fb::create('is_blocked', T\BooleanType::create())
                ->build(),
            /*
             * Indicates that the user is a staff member and has access to the cms, dashboard, etc.
             */
            Fb::create('is_staff', T\BooleanType::create())
                ->build(),
            /*
             * A user's roles determine what permissions they'll have when using the system.
             */
            Fb::create('roles', T\StringType::create())
                ->asASet()
                ->pattern('^[\w_]+$')
                ->build()
        ];
    }
}
