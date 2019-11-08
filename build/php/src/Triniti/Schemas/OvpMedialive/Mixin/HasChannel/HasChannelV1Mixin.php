<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/mixin/has-channel/1-0-0.json#
namespace Triniti\Schemas\OvpMedialive\Mixin\HasChannel;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class HasChannelV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp.medialive:mixin:has-channel:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('medialive_channel_arn', T\StringType::create())
                ->pattern('^[\w:-]+$')
                ->build(),
        ];
    }
}
