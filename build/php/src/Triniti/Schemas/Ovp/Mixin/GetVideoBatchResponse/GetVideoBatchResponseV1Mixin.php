<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/get-video-batch-response/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\GetVideoBatchResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Ovp\Mixin\Video\Video as TrinitiOvpVideo;

final class GetVideoBatchResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:get-video-batch-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAMap()
                ->anyOfClassNames([
                    TrinitiOvpVideo::class,
                ])
                ->build(),
        ];
    }
}
