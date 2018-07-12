export default function RedirectV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        uri: this.get('title'),
        redirect_to: this.get('redirect_to'),
        is_permanent: this.get('is_permanent'),
        is_vanity: this.get('is_vanity'),
      };
    }
  });
}
