export default function TwitterVideoBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        tweet_id: this.get('tweet_id'),
        hide_tweet: this.get('hide_tweet'),
      };
    }
  });
}
