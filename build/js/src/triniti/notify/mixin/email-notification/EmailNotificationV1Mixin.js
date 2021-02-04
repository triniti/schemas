export default function EmailNotificationV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        sender: this.get('sender'),
        template: this.get('template'),
      };
    }
  });
}
