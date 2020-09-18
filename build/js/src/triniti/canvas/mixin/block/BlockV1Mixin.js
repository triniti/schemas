import MessageRef from '@gdbots/pbj/well-known/MessageRef';';

export default function BlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @param {?string} tag
     * @returns {MessageRef}
     */
    generateMessageRef(tag = null) {
      return new MessageRef(this.schema().getCurie(), this.get('etag') || this.generateEtag(['etag']), tag);
    }
  });
}
