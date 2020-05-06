// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/transcribable/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';
import TranscriptionStatus from '@triniti/schemas/triniti/ovp/enums/TranscriptionStatus';

export default class TranscribableV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:transcribable:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('transcription_status', T.StringEnumType.create())
        .classProto(TranscriptionStatus)
        .build(),
    ];
  }
}
