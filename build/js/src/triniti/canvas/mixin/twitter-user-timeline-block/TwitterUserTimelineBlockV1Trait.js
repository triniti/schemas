export default function TwitterUserTimelineBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        tweet_limit: this.get('tweet_limit'),
      };
    }
  });
}
