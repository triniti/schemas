<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/page-expired/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\PageExpired;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PageExpiredV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:page-expired:1-0-0');
    }
}
