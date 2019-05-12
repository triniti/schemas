// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/ios-notification/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class IosNotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:ios-notification:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * @link https://firebase.google.com/docs/cloud-messaging/ios/topic-messaging
       * FCM topic messaging allows you to send a message to multiple devices that have opted in to a particular topic.
       */
      Fb.create('fcm_topics', T.StringType.create())
        .asASet()
        .pattern('^[\\w\\/\\.:~%#-]+$')
        .build(),
    ];
  }
}
