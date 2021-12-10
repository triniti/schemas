<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/people/request/search-people-request/1-0-0.json#
namespace Triniti\Schemas\People\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Triniti\Schemas\People\Enum\SearchPeopleSort;

final class SearchPeopleRequestV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:people:request:search-people-request:1-0-0';
    const SCHEMA_CURIE = 'triniti:people:request:search-people-request';
    const SCHEMA_CURIE_MAJOR = 'triniti:people:request:search-people-request:v1';
    const MIXINS = [
      'gdbots:pbjx:mixin:request:v1',
      'gdbots:pbjx:mixin:request',
      'gdbots:ncr:mixin:search-nodes-request:v1',
      'gdbots:ncr:mixin:search-nodes-request',
    ];

    use GdbotsPbjxRequestV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('request_id', T\UuidType::create())
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
                /*
                 * The "ctx_retries" field is used to keep track of how many attempts were
                 * made to handle this request. In some cases, the service or transport
                 * that handles the request may be down or over capacity and is being retried.
                 */
                Fb::create('ctx_retries', T\TinyIntType::create())
                    ->build(),
                Fb::create('ctx_causator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_correlator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_user_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * The "ctx_app" refers to the application used to make the request. This is
                 * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
                 * is not necessarily the app used (cms, iOS app, website)
                 */
                Fb::create('ctx_app', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::app',
                    ])
                    ->build(),
                /*
                 * The "ctx_cloud" is set by the server making the request and is generally
                 * only used internally for tracking and performance monitoring.
                 */
                Fb::create('ctx_cloud', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::cloud',
                    ])
                    ->build(),
                Fb::create('ctx_ip', T\StringType::create())
                    ->format(Format::IPV4)
                    ->overridable(true)
                    ->build(),
                Fb::create('ctx_ipv6', T\StringType::create())
                    ->format(Format::IPV6)
                    ->overridable(true)
                    ->build(),
                Fb::create('ctx_ua', T\TextType::create())
                    ->overridable(true)
                    ->build(),
                /*
                 * Field names to dereference, this serves as a hint to the server and is not
                 * necessarily gauranteed since authorization, availability, etc. are determined
                 * by the server not the client.
                 */
                Fb::create('derefs', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w\.-]+$')
                    ->build(),
                Fb::create('q', T\TextType::create())
                    ->maxLength(2000)
                    ->build(),
                /*
                 * The number of results to return.
                 */
                Fb::create('count', T\TinyIntType::create())
                    ->withDefault(25)
                    ->build(),
                Fb::create('page', T\TinyIntType::create())
                    ->min(1)
                    ->withDefault(1)
                    ->build(),
                Fb::create('autocomplete', T\BooleanType::create())
                    ->build(),
                Fb::create('track_total_hits', T\BooleanType::create())
                    ->build(),
                /*
                 * A cursor is a string (normally base64 encoded) which marks a specific item in a list of data.
                 * When cursor is present it should be used instead of "page".
                 */
                Fb::create('cursor', T\StringType::create())
                    ->build(),
                /*
                 * The status a node must be in to match the search request.
                 */
                Fb::create('status', T\StringEnumType::create())
                    ->className(NodeStatus::class)
                    ->build(),
                /*
                 * A set of statuses (node must match at least one) to include in the search results.
                 */
                Fb::create('statuses', T\StringEnumType::create())
                    ->asASet()
                    ->className(NodeStatus::class)
                    ->build(),
                Fb::create('created_after', T\DateTimeType::create())
                    ->build(),
                Fb::create('created_before', T\DateTimeType::create())
                    ->build(),
                Fb::create('updated_after', T\DateTimeType::create())
                    ->build(),
                Fb::create('updated_before', T\DateTimeType::create())
                    ->build(),
                Fb::create('published_after', T\DateTimeType::create())
                    ->build(),
                Fb::create('published_before', T\DateTimeType::create())
                    ->build(),
                /*
                 * The fields that are being queried as determined by parsing the "q" field.
                 */
                Fb::create('fields_used', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w\.-]+$')
                    ->build(),
                Fb::create('parsed_query_json', T\TextType::create())
                    ->build(),
                Fb::create('is_unlisted', T\TrinaryType::create())
                    ->build(),
                Fb::create('is_celebrity', T\TrinaryType::create())
                    ->build(),
                Fb::create('sort', T\StringEnumType::create())
                    ->withDefault(SearchPeopleSort::TITLE_ASC)
                    ->className(SearchPeopleSort::class)
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
