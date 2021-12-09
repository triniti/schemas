<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/entry/1-0-0.json#
namespace Triniti\Schemas\OvpKaltura;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\MessageRef;
use Triniti\Schemas\OvpKaltura\Enum\DisplayInSearchType;
use Triniti\Schemas\OvpKaltura\Enum\EntryModerationStatus;
use Triniti\Schemas\OvpKaltura\Enum\EntryStatus;
use Triniti\Schemas\OvpKaltura\Enum\EntryType;
use Triniti\Schemas\OvpKaltura\Enum\MediaType;
use Triniti\Schemas\OvpKaltura\Enum\SourceType;

final class EntryV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:ovp.kaltura::entry:1-0-0';
    const SCHEMA_CURIE = 'triniti:ovp.kaltura::entry';
    const SCHEMA_CURIE_MAJOR = 'triniti:ovp.kaltura::entry:v1';
    const MIXINS = [];

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                Fb::create('description', T\TextType::create())
                    ->build(),
                Fb::create('partner_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('user_id', T\StringType::create())
                    ->build(),
                Fb::create('creator_id', T\StringType::create())
                    ->build(),
                Fb::create('tags', T\StringType::create())
                    ->asASet()
                    ->build(),
                Fb::create('categories', T\StringType::create())
                    ->asASet()
                    ->build(),
                Fb::create('categories_ids', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('categories_normalized', T\StringType::create())
                    ->asASet()
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->className(EntryStatus::class)
                    ->build(),
                Fb::create('moderation_status', T\StringEnumType::create())
                    ->className(EntryModerationStatus::class)
                    ->build(),
                Fb::create('type', T\StringEnumType::create())
                    ->className(EntryType::class)
                    ->build(),
                Fb::create('created_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('updated_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('rank', T\FloatType::create())
                    ->build(),
                Fb::create('flavor_params_ids', T\IntType::create())
                    ->asASet()
                    ->build(),
                Fb::create('data_url', T\TextType::create())
                    ->format(Format::URL)
                    ->build(),
                Fb::create('download_url', T\TextType::create())
                    ->format(Format::URL)
                    ->build(),
                Fb::create('version', T\SmallIntType::create())
                    ->build(),
                Fb::create('thumbnail_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('thumbnail_created_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('thumbnail_ext', T\StringType::create())
                    ->pattern('^[\w\.-]+$')
                    ->build(),
                Fb::create('thumbnail_url', T\TextType::create())
                    ->format(Format::URL)
                    ->build(),
                Fb::create('start_date', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('end_date', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('reference_id', T\StringType::create())
                    ->pattern('^[\w\.:,\/-]+$')
                    ->build(),
                Fb::create('replacing_entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('replaced_entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('redirect_entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('root_entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('parent_entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('display_in_search', T\StringEnumType::create())
                    ->className(DisplayInSearchType::class)
                    ->build(),
                Fb::create('plays', T\IntType::create())
                    ->build(),
                Fb::create('views', T\IntType::create())
                    ->build(),
                Fb::create('last_played_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('width', T\SmallIntType::create())
                    ->build(),
                Fb::create('height', T\SmallIntType::create())
                    ->build(),
                Fb::create('duration', T\SmallIntType::create())
                    ->build(),
                Fb::create('duration_ms', T\MediumIntType::create())
                    ->build(),
                Fb::create('media_type', T\StringEnumType::create())
                    ->className(MediaType::class)
                    ->build(),
                Fb::create('source_type', T\StringEnumType::create())
                    ->className(SourceType::class)
                    ->build(),
                Fb::create('metadata', T\TextType::create())
                    ->asAMap()
                    ->build(),
            ],
            self::MIXINS
        );
    }

    public function generateMessageRef(?string $tag = null): MessageRef
    {
        return new MessageRef(static::schema()->getCurie(), $this->fget('entry_id'), $tag);
    }
    
    public function getUriTemplateVars(): array
    {
        return [
            'entry_id' => $this->fget('entry_id'),
            'partner_id' => $this->fget('partner_id'),
        ];
    }
}
