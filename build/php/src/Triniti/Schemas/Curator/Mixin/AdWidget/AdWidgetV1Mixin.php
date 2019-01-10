<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/ad-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\AdWidget;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Common\Enum\AdSize;

final class AdWidgetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:ad-widget:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('ad_size', T\StringEnumType::create())
                ->className(AdSize::class)
                ->build(),
            Fb::create('dfp_cust_params', T\StringType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
