<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/notify/notifier-result/1-0-0.json#
namespace Triniti\Schemas\Notify;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\MessageRef;

final class NotifierResultV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:notify::notifier-result:1-0-0';
    const SCHEMA_CURIE = 'triniti:notify::notifier-result';
    const SCHEMA_CURIE_MAJOR = 'triniti:notify::notifier-result:v1';
    const MIXINS = [
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
    ];

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('ok', T\BooleanType::create())
                    ->withDefault(true)
                    ->build(),
                Fb::create('code', T\SmallIntType::create())
                    ->withDefault(0)
                    ->build(),
                Fb::create('error_name', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('error_message', T\TextType::create())
                    ->build(),
                /*
                 * When a notification is sent the platform/vendor often responds with a payload
                 * that describes the result. This field should contain a (de)serializable
                 * string, JSON is preferred.
                 */
                Fb::create('raw_response', T\TextType::create())
                    ->build(),
            ],
            self::MIXINS
        );
    }

    public function generateMessageRef(?string $tag = null): MessageRef
    {
        return new MessageRef(static::schema()->getCurie(), $this->generateEtag(), $tag);
    }
    
    public function getUriTemplateVars(): array
    {
        return [];
    }
}
