<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/mixin/media-entry/1-0-0.json#
namespace Triniti\Schemas\OvpKaltura\Mixin\MediaEntry;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class MediaEntryV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp.kaltura:mixin:media-entry:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('kaltura_entry_id', T\StringType::create())
                ->pattern('^[\w-]+$')
                ->build(),
            Fb::create('kaltura_partner_id', T\StringType::create())
                ->pattern('^[\w-]+$')
                ->build(),
            /*
             * Updated at info from Kaltura
             */
            Fb::create('kaltura_updated_at', T\TimestampType::create())
                ->build(),
            /*
             * MP4 URL from Kaltura
             */
            Fb::create('kaltura_mp4_url', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * Metadata from Kaltura
             */
            Fb::create('kaltura_metadata', T\TextType::create())
                ->build(),
            /*
             * JSON with all Kaltura flavors
             */
            Fb::create('kaltura_flavors', T\TextType::create())
                ->build(),
            /*
             * Disable Kaltura sync on entry
             */
            Fb::create('kaltura_sync_enabled', T\BooleanType::create())
                ->build(),
        ];
    }
}
