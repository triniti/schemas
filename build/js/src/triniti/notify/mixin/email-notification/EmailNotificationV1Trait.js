export default function EmailNotificationV1Trait(m) {
  Object.assign(m.prototype, {
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
