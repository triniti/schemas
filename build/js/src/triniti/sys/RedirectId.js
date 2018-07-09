import SlugIdentifier from '@gdbots/pbj/well-known/SlugIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import RedirectV1Mixin from './mixin/redirect/RedirectV1Mixin';

/** @type {SchemaQName} */
let qname;

/**
 * A redirect id is just a friendly slug identifer.
 * e.g. "credits", "swipes", "countries-iso2"
 */
export default class RedirectId extends SlugIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = RedirectV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
