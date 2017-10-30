<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/page-unpublished/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\PageUnpublished;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;

final class PageUnpublishedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:page-unpublished:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('status', T\StringEnumType::create())
                ->withDefault(NodeStatus::DRAFT())
                ->className(NodeStatus::class)
                ->build(),
        ];
    }
}
