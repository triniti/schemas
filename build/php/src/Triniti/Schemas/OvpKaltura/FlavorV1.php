<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/flavor/1-0-0.json#
namespace Triniti\Schemas\OvpKaltura;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\OvpKaltura\Enum\FlavorAssetStatus;

final class FlavorV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:ovp.kaltura::flavor:1-0-0';
    const SCHEMA_CURIE = 'triniti:ovp.kaltura::flavor';
    const SCHEMA_CURIE_MAJOR = 'triniti:ovp.kaltura::flavor:v1';
    const MIXINS = [];

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('flavor_params_id', T\IntType::create())
                    ->build(),
                Fb::create('id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('width', T\SmallIntType::create())
                    ->build(),
                Fb::create('height', T\SmallIntType::create())
                    ->build(),
                Fb::create('bitrate', T\SmallIntType::create())
                    ->build(),
                Fb::create('frame_rate', T\FloatType::create())
                    ->build(),
                Fb::create('is_original', T\BooleanType::create())
                    ->build(),
                Fb::create('is_web', T\BooleanType::create())
                    ->build(),
                Fb::create('container_format', T\StringType::create())
                    ->build(),
                Fb::create('video_codec_id', T\StringType::create())
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->className(FlavorAssetStatus::class)
                    ->build(),
                Fb::create('language', T\StringType::create())
                    ->build(),
                Fb::create('is_default', T\BooleanType::create())
                    ->build(),
                Fb::create('version', T\SmallIntType::create())
                    ->build(),
                Fb::create('tags', T\StringType::create())
                    ->asASet()
                    ->build(),
                Fb::create('created_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('updated_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('size', T\IntType::create())
                    ->build(),
                Fb::create('file_ext', T\StringType::create())
                    ->pattern('^[\w\.-]+$')
                    ->build(),
                Fb::create('description', T\TextType::create())
                    ->build(),
                Fb::create('url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
            ],
            self::MIXINS
        );
    }

    /**
     * @param string $tag
     * @return MessageRef
     */
    public function generateMessageRef($tag = null)
    {
        return new MessageRef(static::schema()->getCurie(), $this->get('id'), $tag);
    }
    
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'id' => $this->get('id'),
            'entry_id' => $this->get('entry_id'),
        ];
    }
}
