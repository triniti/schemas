<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/apollo/command/cast-vote/1-0-0.json#
namespace Triniti\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Enum\DayOfWeek;
use Gdbots\Schemas\Common\Enum\Month;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;

final class CastVoteV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:apollo:command:cast-vote:1-0-0';
    const SCHEMA_CURIE = 'triniti:apollo:command:cast-vote';
    const SCHEMA_CURIE_MAJOR = 'triniti:apollo:command:cast-vote:v1';
    const MIXINS = [
      'gdbots:pbjx:mixin:command:v1',
      'gdbots:pbjx:mixin:command',
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
      'gdbots:enrichments:mixin:time-parting:v1',
      'gdbots:enrichments:mixin:time-parting',
      'gdbots:enrichments:mixin:time-sampling:v1',
      'gdbots:enrichments:mixin:time-sampling',
      'gdbots:enrichments:mixin:utm:v1',
      'gdbots:enrichments:mixin:utm',
    ];

    use GdbotsPbjxCommandV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('command_id', T\TimeUuidType::create())
                    ->required()
                    ->build(),
                Fb::create('occurred_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * Used to perform optimistic concurrency control.
                 * @link https://en.wikipedia.org/wiki/HTTP_ETag
                 */
                Fb::create('expected_etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                /*
                 * Multi-tenant apps can use this field to track the tenant id.
                 */
                Fb::create('ctx_tenant_id', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                /*
                 * The "ctx_retries" field is used to keep track of how many attempts were
                 * made to process this command. In some cases, the service or transport
                 * that handles the command may be down or an optimistic check has failed
                 * and is being retried.
                 */
                Fb::create('ctx_retries', T\TinyIntType::create())
                    ->build(),
                /*
                 * The "ctx_causator" is the actual causator object that "ctx_causator_ref"
                 * refers to. In some cases it's useful for command handlers to copy the
                 * causator into the command. For example, when a node is being updated we
                 * may want to know what the node will be after the update. We can derive
                 * this via the causator instead of requesting the node and engaging a race
                 * condition.
                 */
                Fb::create('ctx_causator', T\MessageType::create())
                    ->build(),
                Fb::create('ctx_causator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_correlator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_user_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * The "ctx_app" refers to the application used to send the command. This is
                 * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
                 * is not necessarily the app used (cms, iOS app, website)
                 */
                Fb::create('ctx_app', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::app',
                    ])
                    ->build(),
                /*
                 * The "ctx_cloud" is set by the server receiving the command and is generally
                 * only used internally for tracking and performance monitoring.
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
                 * An optional message/reason for the command being sent.
                 * Consider this like a git commit message.
                 */
                Fb::create('ctx_msg', T\TextType::create())
                    ->build(),
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('month_of_year', T\IntEnumType::create())
                    ->withDefault(0)
                    ->className(Month::class)
                    ->build(),
                Fb::create('day_of_month', T\TinyIntType::create())
                    ->max(31)
                    ->build(),
                Fb::create('day_of_week', T\IntEnumType::create())
                    ->withDefault(0)
                    ->className(DayOfWeek::class)
                    ->build(),
                Fb::create('is_weekend', T\BooleanType::create())
                    ->build(),
                Fb::create('hour_of_day', T\TinyIntType::create())
                    ->max(23)
                    ->build(),
                Fb::create('ts_ymdh', T\IntType::create())
                    ->build(),
                Fb::create('ts_ymd', T\IntType::create())
                    ->build(),
                Fb::create('ts_ym', T\MediumIntType::create())
                    ->build(),
                Fb::create('utm_source', T\StringType::create())
                    ->maxLength(50)
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('utm_medium', T\StringType::create())
                    ->maxLength(50)
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('utm_term', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\s\/\.,:-]+$')
                    ->build(),
                Fb::create('utm_content', T\StringType::create())
                    ->maxLength(50)
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('utm_campaign', T\StringType::create())
                    ->maxLength(50)
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('poll_ref', T\NodeRefType::create())
                    ->required()
                    ->build(),
                Fb::create('answer_id', T\UuidType::create())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
