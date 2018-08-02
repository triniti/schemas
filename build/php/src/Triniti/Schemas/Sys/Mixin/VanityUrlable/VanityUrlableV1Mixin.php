<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/vanity-urlable/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\VanityUrlable;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class VanityUrlableV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:vanity-urlable:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('redirect_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
