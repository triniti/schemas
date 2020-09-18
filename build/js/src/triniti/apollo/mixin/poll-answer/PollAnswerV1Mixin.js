import MessageRef from '@gdbots/pbj/well-known/MessageRef';';

export default function PollAnswerV1Mixin(M) {
  Object.assign(M.prototype, {
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
