export default function LiveBlogUpdateTeaserV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        timeline_ref: `${this.get('timeline_ref', '')}`,
      };
    }
  });
}
