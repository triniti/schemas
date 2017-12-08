<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/publish-page/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PublishPage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class PublishPageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:publish-page:1-0-0');
    }
}
