export default function EmeFormBlockV1Mixin(M) {
  Object.assign(M.prototype, {
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
