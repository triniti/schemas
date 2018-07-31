export default function FlagsetV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        string_flags: this.get('string_flags'),
        int_flags: this.get('int_flags'),
        boolean_flags: this.get('boolean_flags'),
      };
    }
  });
}
