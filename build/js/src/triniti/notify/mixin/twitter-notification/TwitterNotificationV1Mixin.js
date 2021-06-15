// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/twitter-notification/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class TwitterNotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:twitter-notification:1-0-0');
  }
}
