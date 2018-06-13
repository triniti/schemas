export default function BlogrollWidgetV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        promotion_slot: this.get('promotion_slot'),
      };
    }
  });
}
