// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/rename-video/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class RenameVideoV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:rename-video:1-0-0');
  }
}
