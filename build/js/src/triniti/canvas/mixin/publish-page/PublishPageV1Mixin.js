// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/publish-page/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class PublishPageV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:publish-page:1-0-0');
  }
}
