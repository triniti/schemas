<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/mark-poll-as-draft/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\MarkPollAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class MarkPollAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:mark-poll-as-draft:1-0-0');
    }
}
