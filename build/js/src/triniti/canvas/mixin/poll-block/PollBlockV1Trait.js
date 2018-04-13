export default function PollBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        node_ref: `${this.get('node_ref', '')}`,
      };
    }
  });
}
