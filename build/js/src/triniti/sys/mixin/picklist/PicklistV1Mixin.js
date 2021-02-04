export default function PicklistV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        alpha_sort: this.get('alpha_sort'),
        allow_other: this.get('allow_other'),
        default_value: this.get('default_value'),
      };
    }
  });
}
