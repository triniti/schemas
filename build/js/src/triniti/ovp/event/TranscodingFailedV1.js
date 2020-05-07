// @link http://schemas.triniti.io/json-schema/triniti/ovp/event/transcoding-failed/1-0-0.json#
import Code from '@gdbots/schemas/gdbots/pbjx/enums/Code';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class TranscodingFailedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp:event:transcoding-failed:1-0-0', TranscodingFailedV1,
      [
        /*
         * A reference to the video asset that failed to transcode.
         */
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
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
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(TranscodingFailedV1);
MessageResolver.register('triniti:ovp:event:transcoding-failed', TranscodingFailedV1);
Object.freeze(TranscodingFailedV1);
Object.freeze(TranscodingFailedV1.prototype);
