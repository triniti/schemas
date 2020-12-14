export default function EmeFormBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        solicit_id: this.get('solicit_id'),
        expiration_date: this.get('expiration_date'),
      };
    }
  });
}
