<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-widgets-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\SearchWidgetsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\Widget\Widget as TrinitiCuratorWidget;

final class SearchWidgetsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:search-widgets-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiCuratorWidget::class,
                ])
                ->build(),
        ];
    }
}
