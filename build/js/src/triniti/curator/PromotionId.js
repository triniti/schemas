import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PromotionV1Mixin from './mixin/promotion/PromotionV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class PromotionId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = PromotionV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
