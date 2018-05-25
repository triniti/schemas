// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/notification-failed/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class NotificationFailedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:notification-failed:1-0-0');
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
       * When a notification fails the platform/vendor often responds with a payload
       * that describes the error(s). This field should contain a (de)serializable
       * string, JSON is preferred.
       */
      Fb.create('response', T.TextType.create())
        .build(),
    ];
  }
}
