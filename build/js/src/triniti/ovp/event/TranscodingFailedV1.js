// @link http://schemas.triniti.io/json-schema/triniti/ovp/event/transcoding-failed/1-0-0.json#
import Code from '@gdbots/schemas/gdbots/pbjx/enums/Code';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import Message from '@gdbots/pbj/Message';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class TranscodingFailedV1 extends Message {
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
        /*
         * A reference to the video asset that failed to transcode.
         */
        Fb.create('node_ref', T.NodeRefType.create())
          .required()
          .build(),
        Fb.create('mediaconvert_job_arn', T.StringType.create())
          .pattern('^[\\/\\w:-]+$')
          .build(),
        Fb.create('mediaconvert_queue_arn', T.StringType.create())
          .pattern('^[\\/\\w:-]+$')
          .build(),
        Fb.create('error_code', T.IntEnumType.create())
          .classProto(Code)
          .build(),
        Fb.create('error_message', T.TextType.create())
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = TranscodingFailedV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:ovp:event:transcoding-failed:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:ovp:event:transcoding-failed';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:ovp:event:transcoding-failed:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:event:v1',
  'gdbots:pbjx:mixin:event',
  'gdbots:common:mixin:taggable:v1',
  'gdbots:common:mixin:taggable',
];

GdbotsPbjxEventV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
