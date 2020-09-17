export default function BlogrollWidgetV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        promotion_slot_prefix: this.get('promotion_slot_prefix'),
      };
    }
  });
}
