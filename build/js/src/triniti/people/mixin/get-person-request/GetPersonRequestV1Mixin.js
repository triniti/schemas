// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/get-person-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GetPersonRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:people:mixin:get-person-request:1-0-0');
  }
}
