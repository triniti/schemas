<?php

namespace Triniti\Schemas\Users\Mixin\GetUserHistoryResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class GetUserHistoryResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:users:mixin:get-user-history-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [];
    }
}
