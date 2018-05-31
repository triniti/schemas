<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/caption/1-0-0.json#
namespace Triniti\Schemas\OvpKaltura;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\OvpKaltura\Enum\CaptionAssetStatus;
use Triniti\Schemas\OvpKaltura\Enum\CaptionType;

final class CaptionV1 extends AbstractMessage implements
    Caption
{

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:ovp.kaltura::caption:1-0-0', __CLASS__,
            [
                Fb::create('id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('entry_id', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                Fb::create('version', T\SmallIntType::create())
                    ->build(),
                Fb::create('size', T\MediumIntType::create())
                    ->build(),
                Fb::create('file_ext', T\StringType::create())
                    ->build(),
                Fb::create('created_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('updated_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('deleted_at', T\TimestampType::create())
                    ->useTypeDefault(false)
                    ->build(),
                Fb::create('description', T\StringType::create())
                    ->build(),
                Fb::create('language', T\StringType::create())
                    ->build(),
                Fb::create('language_code', T\StringType::create())
                    ->build(),
                Fb::create('is_default', T\BooleanType::create())
                    ->build(),
                Fb::create('accuracy', T\SmallIntType::create())
                    ->build(),
                Fb::create('url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->className(CaptionAssetStatus::class)
                    ->build(),
                Fb::create('format', T\StringEnumType::create())
                    ->className(CaptionType::class)
                    ->build(),
            ]
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
