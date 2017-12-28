// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/get-poll-batch-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GetPollBatchRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:get-poll-batch-request:1-0-0');
  }
}
