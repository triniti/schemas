// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-scheduled/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class TeaserScheduledV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:teaser-scheduled:1-0-0');
  }
}
