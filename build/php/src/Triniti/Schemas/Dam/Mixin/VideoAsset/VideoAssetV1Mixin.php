<?php
// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/video-asset/1-0-1.json#
namespace Triniti\Schemas\Dam\Mixin\VideoAsset;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class VideoAssetV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:dam:mixin:video-asset:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * Duration of the video in seconds.
             */
            Fb::create('duration', T\SmallIntType::create())
                ->build(),
        ];
    }
}
