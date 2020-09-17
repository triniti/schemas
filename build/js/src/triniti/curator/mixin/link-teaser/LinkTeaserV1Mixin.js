export default function LinkTeaserV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        link_url: this.get('link_url'),
      };
    }
  });
}
