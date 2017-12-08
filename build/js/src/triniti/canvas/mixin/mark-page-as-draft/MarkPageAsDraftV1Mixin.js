// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/mark-page-as-draft/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class MarkPageAsDraftV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:mark-page-as-draft:1-0-0');
  }
}
