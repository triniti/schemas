<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/page-scheduled/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\PageScheduled;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;

final class PageScheduledV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:page-scheduled:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('status', T\StringEnumType::create())
                ->withDefault(NodeStatus::SCHEDULED())
                ->className(NodeStatus::class)
                ->build(),
        ];
    }
}
