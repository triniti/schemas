<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/picklist/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\Picklist;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Sys\PicklistId;

final class PicklistV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:picklist:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->className(PicklistId::class)
                ->overridable(true)
                ->build(),
            Fb::create('options', T\StringType::create())
                ->asAList()
                ->build(),
            Fb::create('alpha_sort', T\BooleanType::create())
                ->build(),
            Fb::create('allow_other', T\BooleanType::create())
                ->build(),
            Fb::create('default_value', T\StringType::create())
                ->build(),
        ];
    }
}
