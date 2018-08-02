// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/list-all-flagsets-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class ListAllFlagsetsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:sys:mixin:list-all-flagsets-request:1-0-0');
  }
}
