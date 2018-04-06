// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/gallery-block/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GalleryBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:gallery-block:1-0-0');
  }
}
