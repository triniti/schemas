export default function ImageAssetV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        width: this.get('width'),
        height: this.get('height'),
      };
    }
  });
}
