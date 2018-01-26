<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/google-map-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GoogleMapBlock;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class GoogleMapBlockV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:google-map-block:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('q', T\StringType::create())
                ->build(),
            Fb::create('center', T\GeoPointType::create())
                ->build(),
            Fb::create('zoom', T\TinyIntType::create())
                ->max(21)
                ->build(),
            Fb::create('maptype', T\StringType::create())
                ->pattern('^(roadmap|satellite)$')
                ->withDefault("roadmap")
                ->build(),
        ];
    }
}
