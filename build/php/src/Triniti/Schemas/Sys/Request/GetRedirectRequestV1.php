<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/sys/request/get-redirect-request/1-0-0.json#
namespace Triniti\Schemas\Sys\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;

final class GetRedirectRequestV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:sys:request:get-redirect-request:1-0-0';
    const SCHEMA_CURIE = 'triniti:sys:request:get-redirect-request';
    const SCHEMA_CURIE_MAJOR = 'triniti:sys:request:get-redirect-request:v1';
    const MIXINS = [
      'gdbots:pbjx:mixin:request:v1',
      'gdbots:pbjx:mixin:request',
      'gdbots:ncr:mixin:get-node-request:v1',
      'gdbots:ncr:mixin:get-node-request',
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
                /*
                 * If true, a strongly consistent read is used; if false (the default), an eventually consistent read is used.
                 */
                Fb::create('consistent_read', T\BooleanType::create())
                    ->build(),
                /*
                 * When "node_ref" is supplied it SHOULD be used to perform the request.
                 * The "node_ref" and "slug" are analogous to protobuf unions in that
                 * only one of these should exist and the priority of selection is as
                 * ordered in this schema.
                 */
                Fb::create('node_ref', T\NodeRefType::create())
                    ->build(),
                /*
                 * The "qname" field should be populated when the request is not
                 * using "node_ref", e.g. "acme:article"
                 */
                Fb::create('qname', T\StringType::create())
                    ->pattern('^[a-z0-9-]+:[a-z0-9-]+$')
                    ->build(),
                Fb::create('slug', T\StringType::create())
                    ->format(Format::SLUG)
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
