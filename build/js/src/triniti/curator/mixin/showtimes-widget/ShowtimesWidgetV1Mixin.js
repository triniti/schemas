export default function ShowtimesWidgetV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        show: this.get('show'),
      };
    }
  });
}
