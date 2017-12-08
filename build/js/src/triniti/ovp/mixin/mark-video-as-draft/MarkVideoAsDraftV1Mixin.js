// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/mark-video-as-draft/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class MarkVideoAsDraftV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:mark-video-as-draft:1-0-0');
  }
}
