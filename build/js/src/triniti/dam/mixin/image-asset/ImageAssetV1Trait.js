export default function ImageAssetV1Trait(m) {
  Object.assign(m.prototype, {
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
