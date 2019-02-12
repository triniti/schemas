export default function AlertWidgetV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        dismissible: this.get('dismissible'),
      };
    }
  });
}
