import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import NotificationV1Mixin from './mixin/notification/NotificationV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class NotificationId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = NotificationV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
