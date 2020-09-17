export default function VideoAssetV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return { _id: `${this.get('_id', '')}` };
    }
  });
}
