<?php

namespace Triniti\Schemas\Users\Mixin\GrantRolesToUser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class GrantRolesToUserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:users:mixin:grant-roles-to-user:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className('Gdbots\Schemas\Ncr\NodeRef')
                ->build(),
            /*
             * The roles to grant to the user.
             */
            Fb::create('roles', T\StringType::create())
                ->asASet()
                ->pattern('^[\w_]+$')
                ->build()
        ];
    }
}
