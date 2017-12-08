<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/page-marked-as-draft/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PageMarkedAsDraft;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PageMarkedAsDraftV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:page-marked-as-draft:1-0-0');
    }
}
