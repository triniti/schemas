export default function LinkTeaserV1Trait(m) {
  Object.assign(m.prototype, {
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
