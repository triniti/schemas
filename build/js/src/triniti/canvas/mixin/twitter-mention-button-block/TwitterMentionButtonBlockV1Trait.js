export default function TwitterMentionButtonBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        recommended_accounts: this.get('recommended_accounts'),
      };
    }
  });
}
