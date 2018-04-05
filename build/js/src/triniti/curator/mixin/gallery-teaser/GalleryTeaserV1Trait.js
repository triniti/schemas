export default function GalleryTeaserV1Trait(m) {
  Object.assign(m.prototype, {
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
