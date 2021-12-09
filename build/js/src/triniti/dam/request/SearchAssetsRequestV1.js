// @link http://schemas.triniti.io/json-schema/triniti/dam/request/search-assets-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import Message from '@gdbots/pbj/Message';
import NodeStatus from '@gdbots/schemas/gdbots/ncr/enums/NodeStatus';
import Schema from '@gdbots/pbj/Schema';
import SearchAssetsSort from '@triniti/schemas/triniti/dam/enums/SearchAssetsSort';
import T from '@gdbots/pbj/types';

export default class SearchAssetsRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('request_id', T.UuidType.create())
          .required()
          .build(),
        Fb.create('occurred_at', T.MicrotimeType.create())
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create('ctx_tenant_id', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        /*
         * The "ctx_retries" field is used to keep track of how many attempts were
         * made to handle this request. In some cases, the service or transport
         * that handles the request may be down or over capacity and is being retried.
         */
        Fb.create('ctx_retries', T.TinyIntType.create())
          .build(),
        Fb.create('ctx_causator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_user_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_app" refers to the application used to make the request. This is
         * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
         * is not necessarily the app used (cms, iOS app, website)
         */
        Fb.create('ctx_app', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::app',
          ])
          .build(),
        /*
         * The "ctx_cloud" is set by the server making the request and is generally
         * only used internally for tracking and performance monitoring.
         */
        Fb.create('ctx_cloud', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::cloud',
          ])
          .build(),
        Fb.create('ctx_ip', T.StringType.create())
          .format(Format.IPV4)
          .overridable(true)
          .build(),
        Fb.create('ctx_ipv6', T.StringType.create())
          .format(Format.IPV6)
          .overridable(true)
          .build(),
        Fb.create('ctx_ua', T.TextType.create())
          .overridable(true)
          .build(),
        /*
         * Field names to dereference, this serves as a hint to the server and is not
         * necessarily gauranteed since authorization, availability, etc. are determined
         * by the server not the client.
         */
        Fb.create('derefs', T.StringType.create())
          .asASet()
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('q', T.TextType.create())
          .maxLength(2000)
          .build(),
        /*
         * The number of results to return.
         */
        Fb.create('count', T.TinyIntType.create())
          .withDefault(25)
          .build(),
        Fb.create('page', T.TinyIntType.create())
          .min(1)
          .withDefault(1)
          .build(),
        Fb.create('autocomplete', T.BooleanType.create())
          .build(),
        Fb.create('track_total_hits', T.BooleanType.create())
          .build(),
        /*
         * A cursor is a string (normally base64 encoded) which marks a specific item in a list of data.
         * When cursor is present it should be used instead of "page".
         */
        Fb.create('cursor', T.StringType.create())
          .build(),
        /*
         * The status a node must be in to match the search request.
         */
        Fb.create('status', T.StringEnumType.create())
          .classProto(NodeStatus)
          .build(),
        /*
         * A set of statuses (node must match at least one) to include in the search results.
         */
        Fb.create('statuses', T.StringEnumType.create())
          .asASet()
          .classProto(NodeStatus)
          .build(),
        Fb.create('created_after', T.DateTimeType.create())
          .build(),
        Fb.create('created_before', T.DateTimeType.create())
          .build(),
        Fb.create('updated_after', T.DateTimeType.create())
          .build(),
        Fb.create('updated_before', T.DateTimeType.create())
          .build(),
        Fb.create('published_after', T.DateTimeType.create())
          .build(),
        Fb.create('published_before', T.DateTimeType.create())
          .build(),
        /*
         * The fields that are being queried as determined by parsing the "q" field.
         */
        Fb.create('fields_used', T.StringType.create())
          .asASet()
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('parsed_query_json', T.TextType.create())
          .build(),
        Fb.create('sort', T.StringEnumType.create())
          .withDefault(SearchAssetsSort.RELEVANCE)
          .classProto(SearchAssetsSort)
          .build(),
        /*
         * A set of asset types (node must match at least one) to include in
         * the search results, such as image-asset or video-asset.
         */
        Fb.create('types', T.StringType.create())
          .asASet()
          .format(Format.SLUG)
          .build(),
        /*
         * A node ref that an asset must be linked with to match the search request.
         */
        Fb.create('linked_ref', T.NodeRefType.create())
          .build(),
        /*
         * A node ref to a gallery that an asset must be in to match the search request.
         */
        Fb.create('gallery_ref', T.NodeRefType.create())
          .build(),
        /*
         * Each asset in a gallery has a sequence number. This number is the
         * lowest sequence number to find when searching for assets in a gallery.
         */
        Fb.create('gallery_seq_min', T.IntType.create())
          .build(),
        /*
         * Each asset in a gallery has a sequence number. This number is the
         * highest sequence number to find when searching for assets in a gallery.
         */
        Fb.create('gallery_seq_max', T.IntType.create())
          .build(),
        Fb.create('channel_ref', T.NodeRefType.create())
          .build(),
        Fb.create('category_refs', T.NodeRefType.create())
          .asASet()
          .build(),
        Fb.create('person_refs', T.NodeRefType.create())
          .asASet()
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = SearchAssetsRequestV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:dam:request:search-assets-request:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:dam:request:search-assets-request';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:dam:request:search-assets-request:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:request:v1',
  'gdbots:pbjx:mixin:request',
  'gdbots:ncr:mixin:search-nodes-request:v1',
  'gdbots:ncr:mixin:search-nodes-request',
];

GdbotsPbjxRequestV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
