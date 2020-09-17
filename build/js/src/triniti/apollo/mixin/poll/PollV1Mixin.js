export default function PollV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return { _id: `${this.get('_id', '')}` };
    }
  });
}
