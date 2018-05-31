// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/browser-notification/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class BrowserNotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:browser-notification:1-0-0');
  }
}
