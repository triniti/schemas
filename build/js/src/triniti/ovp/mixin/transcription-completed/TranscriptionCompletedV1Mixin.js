// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/transcription-completed/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TranscriptionCompletedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:transcription-completed:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A reference to the video that was transcribed.
       */
      Fb.create('node_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      Fb.create('transcription_job_identifier', T.StringType.create())
        .pattern('^[\\w:-]+$')
        .build(),
    ];
  }
}
