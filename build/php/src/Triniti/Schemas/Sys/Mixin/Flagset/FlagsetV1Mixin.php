<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/flagset/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\Flagset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Sys\FlagsetId;

final class FlagsetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:flagset:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->className(FlagsetId::class)
                ->overridable(true)
                ->build(),
            Fb::create('booleans', T\BooleanType::create())
                ->asAMap()
                ->build(),
            Fb::create('floats', T\FloatType::create())
                ->asAMap()
                ->build(),
            Fb::create('ints', T\IntType::create())
                ->asAMap()
                ->build(),
            Fb::create('strings', T\StringType::create())
                ->asAMap()
                ->build(),
            Fb::create('trinaries', T\TrinaryType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
