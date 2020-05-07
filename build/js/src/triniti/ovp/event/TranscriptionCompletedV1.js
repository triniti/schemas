// @link http://schemas.triniti.io/json-schema/triniti/ovp/event/transcription-completed/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class TranscriptionCompletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp:event:transcription-completed:1-0-0', TranscriptionCompletedV1,
      [
        /*
         * A reference to the video asset that was transcribed.
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
        /*
         * How long in seconds it took to produce a transcribed artifact.
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

GdbotsPbjxEventV1Trait(TranscriptionCompletedV1);
MessageResolver.register('triniti:ovp:event:transcription-completed', TranscriptionCompletedV1);
Object.freeze(TranscriptionCompletedV1);
Object.freeze(TranscriptionCompletedV1.prototype);
