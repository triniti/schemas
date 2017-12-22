// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-asset-batch-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GetAssetBatchRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:get-asset-batch-request:1-0-0');
  }
}
