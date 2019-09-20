<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/has-related-teasers/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\HasRelatedTeasers;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class HasRelatedTeasersV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:has-related-teasers:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('related_teasers_heading', T\StringType::create())
                ->build(),
            Fb::create('related_teaser_refs', T\IdentifierType::create())
                ->asASet()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
