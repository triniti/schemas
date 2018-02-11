// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/delete-channel/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class DeleteChannelV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:delete-channel:1-0-0');
  }
}
