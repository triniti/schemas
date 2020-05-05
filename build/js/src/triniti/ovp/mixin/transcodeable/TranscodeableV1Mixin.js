// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/transcodeable/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';
import TranscodingStatus from '@triniti/schemas/triniti/ovp/enums/TranscodingStatus';

export default class TranscodeableV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:transcodeable:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('transcoding_status', T.StringEnumType.create())
        .classProto(TranscodingStatus)
        .build(),
    ];
  }
}
