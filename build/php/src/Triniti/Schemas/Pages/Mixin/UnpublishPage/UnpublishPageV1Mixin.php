<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/unpublish-page/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\UnpublishPage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class UnpublishPageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:unpublish-page:1-0-0');
    }
}
