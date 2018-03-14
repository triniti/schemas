export default function TwitterMentionButtonBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        prefill_text: this.get('prefill_text'),
        recommended_accounts: this.get('recommended_accounts'),
      };
    }
  });
}
