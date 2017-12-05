<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/publish-page/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PublishPage;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PublishPageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:publish-page:1-0-0');
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
