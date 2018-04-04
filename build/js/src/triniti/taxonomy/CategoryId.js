import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import CategoryV1Mixin from './mixin/category/CategoryV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class CategoryId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = CategoryV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
