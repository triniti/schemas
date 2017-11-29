<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/page-deleted/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\PageDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PageDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:page-deleted:1-0-0');
    }
}
