// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/rename-list/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class RenameListV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:rename-list:1-0-0');
  }
}
