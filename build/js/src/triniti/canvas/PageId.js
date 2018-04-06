import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PageV1Mixin from './mixin/page/PageV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class PageId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = PageV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
