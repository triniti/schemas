export default function EmeFormBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        form_ref: `${this.get('form_ref', '')}`,
      };
    }
  });
}
