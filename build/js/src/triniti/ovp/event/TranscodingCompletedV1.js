// @link http://schemas.triniti.io/json-schema/triniti/ovp/event/transcoding-completed/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class TranscodingCompletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp:event:transcoding-completed:1-0-0', TranscodingCompletedV1,
      [
        /*
         * A reference to the video asset that was transcoded.
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
        /*
         * How long in seconds it took to produce a transcoded artifact.
         */
        Fb.create('time_taken', T.SmallIntType.create())
          .build(),
      ],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(TranscodingCompletedV1);
MessageResolver.register('triniti:ovp:event:transcoding-completed', TranscodingCompletedV1);
Object.freeze(TranscodingCompletedV1);
Object.freeze(TranscodingCompletedV1.prototype);