<?php
// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/advertising/1-0-0.json#
namespace Triniti\Schemas\Common\Mixin\Advertising;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class AdvertisingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:common:mixin:advertising:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('ads_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
            Fb::create('dfp_cust_params', T\StringType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
