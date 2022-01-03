// @link http://schemas.triniti.io/json-schema/triniti/sys/request/search-flagsets-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin.js';
import Message from '@gdbots/pbj/Message.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class SearchFlagsetsResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('response_id', T.UuidType.create())
          .required()
          .build(),
        Fb.create('created_at', T.MicrotimeType.create())
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create('ctx_tenant_id', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('ctx_request_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_request" is the actual request object that "ctx_request_ref" refers to.
         * In some cases it's useful for request handlers to copy the request into the response
         * so the requestor has everything in one message. This will NOT always be populated.
         * A common use case is search request/response cycles where you want to know what the
         * search criteria was so you can render that along with the results.
         */
        Fb.create('ctx_request', T.MessageType.create())
          .anyOfCuries([
            'gdbots:pbjx:mixin:request',
          ])
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        /*
         * Responses can include "dereferenced" messages to prevent
         * the consumer from needing to make multiple HTTP requests.
         * It is up to the consumer to make use of the dereferenced
         * messages if/when they are provided.
         */
        Fb.create('derefs', T.MessageType.create())
          .asAMap()
          .build(),
        /*
         * @link https://en.wikipedia.org/wiki/HATEOAS
         */
        Fb.create('links', T.TextType.create())
          .asAMap()
          .build(),
        Fb.create('metas', T.TextType.create())
          .asAMap()
          .build(),
        /*
         * The total number of nodes matching the search.
         */
        Fb.create('total', T.IntType.create())
          .build(),
        Fb.create('has_more', T.BooleanType.create())
          .build(),
        /*
         * How long in milliseconds it took to run the query.
         */
        Fb.create('time_taken', T.MediumIntType.create())
          .build(),
        /*
         * The maximum score of a matching node from the entire search.
         */
        Fb.create('max_score', T.FloatType.create())
          .build(),
        /*
         * Cursors are optionally provided by the underlying search system to allow for efficient
         * pagination. In the absense of cursors, paging is done using count and page number.
         */
        Fb.create('cursors', T.StringType.create())
          .asAMap()
          .build(),
        Fb.create('nodes', T.MessageType.create())
          .asAList()
          .anyOfCuries([
            'triniti:sys:mixin:flagset',
          ])
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = SearchFlagsetsResponseV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:sys:request:search-flagsets-response:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:sys:request:search-flagsets-response';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:sys:request:search-flagsets-response:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:response:v1',
  'gdbots:pbjx:mixin:response',
  'gdbots:ncr:mixin:search-nodes-response:v1',
  'gdbots:ncr:mixin:search-nodes-response',
];

GdbotsPbjxResponseV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
