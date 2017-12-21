import MessageRef from '@gdbots/pbj/MessageRef';

export default function BlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @param {?string} tag
     * @returns {MessageRef}
     */
    generateMessageRef(tag = null) {
      return new MessageRef(this.schema().getCurie(), this.get('etag') || this.generateEtag(['etag']), tag);
    }
  });
}
