import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import VideoV1Mixin from './mixin/video/VideoV1Mixin';

/** @type {SchemaQName} */
let qname;

export default class VideoId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = VideoV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }
}
