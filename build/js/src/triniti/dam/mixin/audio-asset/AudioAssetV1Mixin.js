// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/audio-asset/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class AudioAssetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:audio-asset:1-0-0');
  }
}
