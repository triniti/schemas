<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/expire-page/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\ExpirePage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class ExpirePageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:expire-page:1-0-0');
    }
}
