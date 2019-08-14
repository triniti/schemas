// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/audio-asset/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AudioAssetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:audio-asset:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * Duration of the audio in seconds.
       */
      Fb.create('duration', T.SmallIntType.create())
        .build(),
    ];
  }
}
