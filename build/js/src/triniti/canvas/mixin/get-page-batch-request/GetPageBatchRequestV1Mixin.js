// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/get-page-batch-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GetPageBatchRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:get-page-batch-request:1-0-0');
  }
}
