import MessageRef from '@gdbots/pbj/MessageRef';

export default function PollAnswerV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @param {?string} tag
     * @returns {MessageRef}
     */
    generateMessageRef(tag = null) {
      return new MessageRef(this.schema().getCurie(), this.get('_id'), tag);
    },
    
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id')}`,
        url: this.get('url'),
      };
    }
  });
}
