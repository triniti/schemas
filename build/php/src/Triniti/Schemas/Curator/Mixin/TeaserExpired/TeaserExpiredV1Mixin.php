<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-expired/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TeaserExpired;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class TeaserExpiredV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser-expired:1-0-0');
    }
}
