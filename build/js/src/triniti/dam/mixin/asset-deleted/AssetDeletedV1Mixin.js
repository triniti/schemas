// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-deleted/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class AssetDeletedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:asset-deleted:1-0-0');
  }
}
