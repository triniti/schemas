// @link http://schemas.triniti.io/json-schema/triniti/apollo/event/vote-casted/1-0-0.json#
import DayOfWeek from '@gdbots/schemas/gdbots/common/enums/DayOfWeek';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import Message from '@gdbots/pbj/Message';
import Month from '@gdbots/schemas/gdbots/common/enums/Month';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class VoteCastedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('event_id', T.TimeUuidType.create())
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
        Fb.create('ctx_causator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_user_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_app" refers to the application used to send the command which
         * in turn resulted in this event being published.
         */
        Fb.create('ctx_app', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::app',
          ])
          .build(),
        /*
         * The "ctx_cloud" is usually copied from the command that resulted in this
         * event being published. This means the value most likely refers to the cloud
         * that received the command originally, not the machine processing the event.
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
         * An optional message/reason for the event being created.
         * Consider this like a git commit message.
         */
        Fb.create('ctx_msg', T.TextType.create())
          .build(),
        /*
         * Tags is a map that categorizes data or tracks references in
         * external systems. The tags names should be consistent and descriptive,
         * e.g. fb_user_id:123, salesforce_customer_id:456.
         */
        Fb.create('tags', T.StringType.create())
          .asAMap()
          .pattern('^[\\w\\/\\.:-]+$')
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
        Fb.create('utm_source', T.StringType.create())
          .maxLength(50)
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('utm_medium', T.StringType.create())
          .maxLength(50)
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('utm_term', T.StringType.create())
          .maxLength(100)
          .pattern('^[\\w\\s\\/\\.,:-]+$')
          .build(),
        Fb.create('utm_content', T.StringType.create())
          .maxLength(50)
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('utm_campaign', T.StringType.create())
          .maxLength(50)
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('poll_ref', T.NodeRefType.create())
          .required()
          .build(),
        Fb.create('answer_id', T.UuidType.create())
          .build(),
        /*
         * "s256" means shard 256. Used to distribute read/write from storage and speed up
         * replay/reindex processes. It can also be used to distribute workload in front end
         * user interfaces or notifications (like isles in a grocery store).
         * This value should NOT change once set.
         */
        Fb.create('s256', T.TinyIntType.create())
          .build(),
        /*
         * "s32" means shard 32. See field "s256" for explanation.
         */
        Fb.create('s32', T.TinyIntType.create())
          .build(),
        /*
         * "s16" means shard 16. See field "s256" for explanation.
         */
        Fb.create('s16', T.TinyIntType.create())
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = VoteCastedV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:apollo:event:vote-casted:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:apollo:event:vote-casted';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:apollo:event:vote-casted:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:event:v1',
  'gdbots:pbjx:mixin:event',
  'gdbots:analytics:mixin:tracked-message:v1',
  'gdbots:analytics:mixin:tracked-message',
  'gdbots:common:mixin:taggable:v1',
  'gdbots:common:mixin:taggable',
  'gdbots:enrichments:mixin:ip-to-geo:v1',
  'gdbots:enrichments:mixin:ip-to-geo',
  'gdbots:enrichments:mixin:time-parting:v1',
  'gdbots:enrichments:mixin:time-parting',
  'gdbots:enrichments:mixin:time-sampling:v1',
  'gdbots:enrichments:mixin:time-sampling',
  'gdbots:enrichments:mixin:ua-parser:v1',
  'gdbots:enrichments:mixin:ua-parser',
  'gdbots:enrichments:mixin:utm:v1',
  'gdbots:enrichments:mixin:utm',
];

GdbotsPbjxEventV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
