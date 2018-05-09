import SlugIdentifier from '@gdbots/pbj/well-known/SlugIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PicklistV1Mixin from './mixin/picklist/PicklistV1Mixin';

/** @type {SchemaQName} */
let qname;

/**
 * A picklist id is just a friendly slug identifer.
 * e.g. "credits", "swipes", "countries-iso2"
 */
export default class PicklistId extends SlugIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = PicklistV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
