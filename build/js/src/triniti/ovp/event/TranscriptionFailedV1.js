// @link http://schemas.triniti.io/json-schema/triniti/ovp/event/transcription-failed/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class TranscriptionFailedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp:event:transcription-failed:1-0-0', TranscriptionFailedV1,
      [
        /*
         * A reference to the video asset that failed to transcribe.
         */
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
        Fb.create('transcribe_job_name', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('transcribe_job_region', T.StringType.create())
          .pattern('^[a-z]{2}-[a-z]+-[0-9]{1}$/')
          .build(),
        Fb.create('language_code', T.StringType.create())
          .pattern('^[\\w-]+$')
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

GdbotsPbjxEventV1Trait(TranscriptionFailedV1);
MessageResolver.register('triniti:ovp:event:transcription-failed', TranscriptionFailedV1);
Object.freeze(TranscriptionFailedV1);
Object.freeze(TranscriptionFailedV1.prototype);
