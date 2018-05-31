// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/android-notification/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class AndroidNotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:android-notification:1-0-0');
  }
}
