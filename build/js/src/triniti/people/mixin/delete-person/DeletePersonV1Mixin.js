// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/delete-person/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class DeletePersonV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:people:mixin:delete-person:1-0-0');
  }
}
