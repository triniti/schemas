import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import ArticleV1Mixin from './mixin/article/ArticleV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class ArticleId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = ArticleV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
