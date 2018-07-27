import SlugIdentifier from '@gdbots/pbj/well-known/SlugIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import FlagsetV1Mixin from './mixin/flagset/FlagsetV1Mixin';

/** @type {SchemaQName} */
let qname;

/**
 * A flagset id is just a friendly slug identifer.
 * e.g. "credits", "swipes", "countries-iso2"
 */
export default class FlagsetId extends SlugIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = FlagsetV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
