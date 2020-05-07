// @link http://schemas.triniti.io/json-schema/triniti/ovp/command/update-transcoding-status/1-0-0.json#
import Code from '@gdbots/schemas/gdbots/pbjx/enums/Code';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TranscodingStatus from '@triniti/schemas/triniti/ovp/enums/TranscodingStatus';

export default class UpdateTranscodingStatusV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp:command:update-transcoding-status:1-0-0', UpdateTranscodingStatusV1,
      [
        /*
         * A reference to the video asset that is being transcoded.
         */
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
        Fb.create('transcoding_status', T.StringEnumType.create())
          .classProto(TranscodingStatus)
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
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdateTranscodingStatusV1);
MessageResolver.register('triniti:ovp:command:update-transcoding-status', UpdateTranscodingStatusV1);
Object.freeze(UpdateTranscodingStatusV1);
Object.freeze(UpdateTranscodingStatusV1.prototype);
