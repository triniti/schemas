<?php

namespace Triniti\Schemas\Users\Mixin\UserUpdated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class UserUpdatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:users:mixin:user-updated:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [];
    }
}
