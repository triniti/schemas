import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import GalleryV1Mixin from './mixin/gallery/GalleryV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class GalleryId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = GalleryV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
