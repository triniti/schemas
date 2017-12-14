<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/rename-page/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\RenamePage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class RenamePageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:rename-page:1-0-0');
    }
}
