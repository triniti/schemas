// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/rename-poll/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class RenamePollV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:rename-poll:1-0-0');
  }
}
