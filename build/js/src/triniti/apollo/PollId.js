import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PollV1Mixin from './mixin/poll/PollV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class PollId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = PollV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
