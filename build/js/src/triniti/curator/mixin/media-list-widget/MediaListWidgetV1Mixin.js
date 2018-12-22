// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/media-list-widget/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class MediaListWidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:media-list-widget:1-0-0');
  }
}
