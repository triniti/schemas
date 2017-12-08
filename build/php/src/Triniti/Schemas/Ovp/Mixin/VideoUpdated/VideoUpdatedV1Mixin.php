<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video-updated/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\VideoUpdated;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Ovp\Mixin\Video\Video as TrinitiOvpVideo;

final class VideoUpdatedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video-updated:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('new_node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiOvpVideo::class,
                ])
                ->build(),
            /*
             * The entire node, as it appeared before it was modified.
             */
            Fb::create('old_node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiOvpVideo::class,
                ])
                ->build(),
        ];
    }
}
