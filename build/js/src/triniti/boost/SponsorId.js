import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SponsorV1Mixin from './mixin/sponsor/SponsorV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class SponsorId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = SponsorV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
