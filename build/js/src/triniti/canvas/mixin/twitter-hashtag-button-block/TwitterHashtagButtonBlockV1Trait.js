export default function TwitterHashtagButtonBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        hashtag: this.get('hashtag'),
        secondary_hashtags: this.get('secondary_hashtags'),
        prefill_text: this.get('prefill_text'),
        recommended_accounts: this.get('recommended_accounts'),
      };
    }
  });
}
