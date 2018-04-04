import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import TimelineV1Mixin from './mixin/timeline/TimelineV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class TimelineId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = TimelineV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
