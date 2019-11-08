<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/mixin/channel-started/1-0-0.json#
namespace Triniti\Schemas\OvpMedialive\Mixin\ChannelStarted;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ChannelStartedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp.medialive:mixin:channel-started:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('video_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
        ];
    }
}
