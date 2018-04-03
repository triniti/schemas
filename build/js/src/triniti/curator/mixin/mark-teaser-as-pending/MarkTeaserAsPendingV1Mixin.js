// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/mark-teaser-as-pending/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class MarkTeaserAsPendingV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:mark-teaser-as-pending:1-0-0');
  }
}