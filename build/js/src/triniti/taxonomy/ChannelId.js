import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import ChannelV1Mixin from './mixin/channel/ChannelV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class ChannelId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = ChannelV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
