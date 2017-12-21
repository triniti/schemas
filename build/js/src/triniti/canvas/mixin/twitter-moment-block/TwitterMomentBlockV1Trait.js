export default function TwitterMomentBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        id: this.get('id'),
        title: this.get('title'),
        limit: this.get('limit'),
      };
    }
  });
}
