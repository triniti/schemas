// @link http://schemas.triniti.io/json-schema/triniti/ovp/command/update-transcription-status/1-0-0.json#
import Code from '@gdbots/schemas/gdbots/pbjx/enums/Code';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TranscriptionStatus from '@triniti/schemas/triniti/ovp/enums/TranscriptionStatus';

export default class UpdateTranscriptionStatusV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp:command:update-transcription-status:1-0-0', UpdateTranscriptionStatusV1,
      [
        /*
         * A reference to the video asset that is being transcribed.
         */
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
        Fb.create('transcription_status', T.StringEnumType.create())
          .classProto(TranscriptionStatus)
          .build(),
        Fb.create('transcribe_job_name', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('transcribe_job_region', T.StringType.create())
          .maxLength(20)
          .format(Format.SLUG)
          .build(),
        Fb.create('language_code', T.StringType.create())
          .pattern('^[\\w-]+$')
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

GdbotsPbjxCommandV1Trait(UpdateTranscriptionStatusV1);
MessageResolver.register('triniti:ovp:command:update-transcription-status', UpdateTranscriptionStatusV1);
Object.freeze(UpdateTranscriptionStatusV1);
Object.freeze(UpdateTranscriptionStatusV1.prototype);
