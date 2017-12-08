<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/unpublish-page/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\UnpublishPage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishPageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:unpublish-page:1-0-0');
    }
}
