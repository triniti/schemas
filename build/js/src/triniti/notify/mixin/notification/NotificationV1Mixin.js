// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import NotificationId from '@triniti/schemas/triniti/notify/NotificationId';
import SchemaId from '@gdbots/pbj/SchemaId';
import SendStatus from '@triniti/schemas/triniti/notify/enums/SendStatus';
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
       * A body text of the notification. It should typically
       * not have HTML.
       */
      Fb.create('body', T.TextType.create())
        .maxLength(5000)
        .build(),
      /*
       * A reference to the target message for the notification.
       */
      Fb.create('content_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      Fb.create('send_status', T.StringEnumType.create())
        .withDefault(SendStatus.UNKNOWN)
        .classProto(SendStatus)
        .build(),
      Fb.create('send_at', T.DateTimeType.create())
        .build(),
    ];
  }
}
