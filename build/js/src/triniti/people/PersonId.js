import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PersonV1Mixin from './mixin/person/PersonV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class PersonId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = PersonV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
