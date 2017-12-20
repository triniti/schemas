// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/expire-poll/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class ExpirePollV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:expire-poll:1-0-0');
  }
}
