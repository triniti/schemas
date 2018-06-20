// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import NotificationId from '@triniti/schemas/triniti/notify/NotificationId';
import NotificationSendStatus from '@triniti/schemas/triniti/notify/enums/NotificationSendStatus';
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
       * A reference to the app this notification is being sent to.
       */
      Fb.create('app_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A reference to the content this notification will include.
       */
      Fb.create('content_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      Fb.create('send_status', T.StringEnumType.create())
        .withDefault(NotificationSendStatus.UNKNOWN)
        .classProto(NotificationSendStatus)
        .build(),
      Fb.create('send_on_publish', T.BooleanType.create())
        .build(),
      Fb.create('send_at', T.DateTimeType.create())
        .build(),
      Fb.create('sent_at', T.DateTimeType.create())
        .build(),
      /*
       * The body of the notification to use (format depends on app/platform). If present
       * this value should take precedence over the body derived from content_ref.
       */
      Fb.create('body', T.TextType.create())
        .maxLength(2000)
        .build(),
      Fb.create('notifier_result', T.MessageType.create())
        .anyOfCuries([
          'triniti:notify::notifier-result',
        ])
        .build(),
    ];
  }
}
