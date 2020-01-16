<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.jwplayer/mixin/has-media/1-0-0.json#
namespace Triniti\Schemas\OvpJwplayer\Mixin\HasMedia;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class HasMediaV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp.jwplayer:mixin:has-media:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('jwplayer_media_id', T\StringType::create())
                ->pattern('^[\w-]+$')
                ->build(),
        ];
    }
}
