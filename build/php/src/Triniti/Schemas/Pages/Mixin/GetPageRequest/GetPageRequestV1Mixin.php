<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/get-page-request/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\GetPageRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class GetPageRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:get-page-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('slug', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
