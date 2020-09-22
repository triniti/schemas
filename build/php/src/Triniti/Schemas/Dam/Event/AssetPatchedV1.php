<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/dam/event/asset-patched/1-0-2.json#
namespace Triniti\Schemas\Dam\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;

final class AssetPatchedV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:dam:event:asset-patched:1-0-2';
    const SCHEMA_CURIE = 'triniti:dam:event:asset-patched';
    const SCHEMA_CURIE_MAJOR = 'triniti:dam:event:asset-patched:v1';
    const MIXINS = [
      'gdbots:pbjx:mixin:event:v1',
      'gdbots:pbjx:mixin:event',
      'gdbots:ncr:mixin:node-patched:v1',
      'gdbots:ncr:mixin:node-patched',
    ];

    use GdbotsPbjxEventV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('event_id', T\TimeUuidType::create())
                    ->required()
                    ->build(),
                Fb::create('occurred_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * Multi-tenant apps can use this field to track the tenant id.
                 */
                Fb::create('ctx_tenant_id', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('ctx_causator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_correlator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_user_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * The "ctx_app" refers to the application used to send the command which
                 * in turn resulted in this event being published.
                 */
                Fb::create('ctx_app', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::app',
                    ])
                    ->build(),
                /*
                 * The "ctx_cloud" is usually copied from the command that resulted in this
                 * event being published. This means the value most likely refers to the cloud
                 * that received the command originally, not the machine processing the event.
                 */
                Fb::create('ctx_cloud', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::cloud',
                    ])
                    ->build(),
                Fb::create('ctx_ip', T\StringType::create())
                    ->format(Format::IPV4())
                    ->overridable(true)
                    ->build(),
                Fb::create('ctx_ipv6', T\StringType::create())
                    ->format(Format::IPV6())
                    ->overridable(true)
                    ->build(),
                Fb::create('ctx_ua', T\TextType::create())
                    ->overridable(true)
                    ->build(),
                /*
                 * An optional message/reason for the event being created.
                 * Consider this like a git commit message.
                 */
                Fb::create('ctx_msg', T\TextType::create())
                    ->build(),
                Fb::create('node_ref', T\NodeRefType::create())
                    ->required()
                    ->build(),
                /*
                 * The names of the fields this patch event should apply changes to.
                 * Nested paths can be referenced using dot notation.
                 */
                Fb::create('paths', T\StringType::create())
                    ->asASet()
                    ->pattern('^[a-zA-Z_]{1}[\w\.]*$')
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                Fb::create('display_title', T\StringType::create())
                    ->build(),
                Fb::create('expires_at', T\DateTimeType::create())
                    ->build(),
                Fb::create('credit', T\StringType::create())
                    ->build(),
                Fb::create('credit_url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
                Fb::create('cta_text', T\StringType::create())
                    ->build(),
                Fb::create('cta_url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
                Fb::create('description', T\TextType::create())
                    ->maxLength(5000)
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
