// @link http://schemas.triniti.io/json-schema/triniti/curator/request/render-promotion-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin.js';
import Message from '@gdbots/pbj/Message.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class RenderPromotionRequestV1 extends Message {
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
        Fb.create('promotion_ref', T.NodeRefType.create())
          .build(),
        /*
         * The name of the slot to use for finding the promotion to render.
         * If promotion_ref is supplied this should be ignored.
         */
        Fb.create('slot', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        /*
         * Used to preview a time other than now of what a promotion slot will render.
         * This is primarily for CMS preview or unit testing.
         */
        Fb.create('render_at', T.DateTimeType.create())
          .build(),
        Fb.create('context', T.MessageType.create())
          .anyOfCuries([
            'triniti:common::render-context',
          ])
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = RenderPromotionRequestV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:curator:request:render-promotion-request:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:curator:request:render-promotion-request';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:curator:request:render-promotion-request:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:request:v1',
  'gdbots:pbjx:mixin:request',
];

GdbotsPbjxRequestV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
