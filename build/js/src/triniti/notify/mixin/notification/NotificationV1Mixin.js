// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import NotificationId from '@triniti/schemas/triniti/notify/NotificationId';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class NotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:notification:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => NotificationId.generate())
        .classProto(NotificationId)
        .overridable(true)
        .build(),
      /*
       * A reference to the app to send the notification.
       */
      Fb.create('app_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A customize alert text of the notification. It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('customize_alert_text', T.TextType.create())
        .maxLength(5000)
        .build(),
    ];
  }
}
