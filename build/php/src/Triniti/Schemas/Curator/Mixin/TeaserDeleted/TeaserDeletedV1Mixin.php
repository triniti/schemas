<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-deleted/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TeaserDeleted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class TeaserDeletedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaser-deleted:1-0-0');
    }
}
