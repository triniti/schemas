export default function RedirectV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        redirect_uri: this.get('redirect_uri'),
        request_uri: this.get('request_uri'),
      };
    }
  });
}
