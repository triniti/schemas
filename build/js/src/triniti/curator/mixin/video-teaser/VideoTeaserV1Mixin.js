export default function VideoTeaserV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        target_ref: `${this.get('target_ref', '')}`,
      };
    }
  });
}
