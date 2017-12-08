<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/delete-page/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\DeletePage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class DeletePageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:delete-page:1-0-0');
    }
}
