// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification-sent/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class NotificationSentV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:notification-sent:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('node_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      /*
       * When a notification is sent the platform/vendor often responds with a payload
       * that may be needed to update our system, e.g. Apple News return an id and revision
       * that will be needed on future updates to the same content. This field
       * should contain a (de)serializable string, JSON is preferred.
       */
      Fb.create('response', T.TextType.create())
        .build(),
    ];
  }
}
