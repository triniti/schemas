<?php
// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/video/1-0-0.json#
namespace Triniti\Schemas\Videos\Mixin\Video;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class VideoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:videos:mixin:video:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The URL to use for the page
             */
            Fb::create('slug', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
