<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/page-scheduled/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PageScheduled;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PageScheduledV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:page-scheduled:1-0-0');
    }
}
