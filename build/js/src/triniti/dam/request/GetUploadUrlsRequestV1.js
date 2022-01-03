// @link http://schemas.triniti.io/json-schema/triniti/dam/request/get-upload-urls-request/1-0-0.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId.js';
import DayOfWeek from '@gdbots/schemas/gdbots/common/enums/DayOfWeek.js';
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin.js';
import Message from '@gdbots/pbj/Message.js';
import Month from '@gdbots/schemas/gdbots/common/enums/Month.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class GetUploadUrlsRequestV1 extends Message {
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
        Fb.create('ctx_ip_geo', T.MessageType.create())
          .anyOfCuries([
            'gdbots:geo::address',
          ])
          .build(),
        Fb.create('month_of_year', T.IntEnumType.create())
          .withDefault(0)
          .classProto(Month)
          .build(),
        Fb.create('day_of_month', T.TinyIntType.create())
          .max(31)
          .build(),
        Fb.create('day_of_week', T.IntEnumType.create())
          .withDefault(0)
          .classProto(DayOfWeek)
          .build(),
        Fb.create('is_weekend', T.BooleanType.create())
          .build(),
        Fb.create('hour_of_day', T.TinyIntType.create())
          .max(23)
          .build(),
        Fb.create('ts_ymdh', T.IntType.create())
          .build(),
        Fb.create('ts_ymd', T.IntType.create())
          .build(),
        Fb.create('ts_ym', T.MediumIntType.create())
          .build(),
        Fb.create('ctx_ua_parsed', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::user-agent',
          ])
          .build(),
        Fb.create('files', T.StringType.create())
          .asAList()
          .build(),
        /*
         * When requesting a url for a variant on an existing asset you should
         * provide the asset_id and the version and optionally the quality.
         */
        Fb.create('asset_id', T.IdentifierType.create())
          .classProto(AssetId)
          .build(),
        Fb.create('quality', T.StringType.create())
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('version', T.StringType.create())
          .pattern('^[\\w\\.-]+$')
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = GetUploadUrlsRequestV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:dam:request:get-upload-urls-request:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:dam:request:get-upload-urls-request';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:dam:request:get-upload-urls-request:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:request:v1',
  'gdbots:pbjx:mixin:request',
  'gdbots:analytics:mixin:tracked-message:v1',
  'gdbots:analytics:mixin:tracked-message',
  'gdbots:enrichments:mixin:ip-to-geo:v1',
  'gdbots:enrichments:mixin:ip-to-geo',
  'gdbots:enrichments:mixin:time-parting:v1',
  'gdbots:enrichments:mixin:time-parting',
  'gdbots:enrichments:mixin:time-sampling:v1',
  'gdbots:enrichments:mixin:time-sampling',
  'gdbots:enrichments:mixin:ua-parser:v1',
  'gdbots:enrichments:mixin:ua-parser',
];

GdbotsPbjxRequestV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
