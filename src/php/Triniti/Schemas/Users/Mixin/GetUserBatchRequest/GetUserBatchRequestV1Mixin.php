<?php

namespace Triniti\Schemas\Users\Mixin\GetUserBatchRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class GetUserBatchRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:users:mixin:get-user-batch-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [];
    }
}
