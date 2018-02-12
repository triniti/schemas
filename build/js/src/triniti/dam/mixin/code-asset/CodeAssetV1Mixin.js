// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/code-asset/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class CodeAssetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:code-asset:1-0-0');
  }
}
