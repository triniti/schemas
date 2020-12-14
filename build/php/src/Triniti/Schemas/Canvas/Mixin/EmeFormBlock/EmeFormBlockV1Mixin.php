<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/eme-form-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\EmeFormBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class EmeFormBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:eme-form-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('solicit_id', T\StringType::create())
                ->required()
                ->pattern('^[\w\/-]+$')
                ->build(),
            /*
             * Represents the date on which the solicit is set to expire.
             */
            Fb::create('expiration_date', T\DateTimeType::create())
                ->build(),
        ];
    }
}
