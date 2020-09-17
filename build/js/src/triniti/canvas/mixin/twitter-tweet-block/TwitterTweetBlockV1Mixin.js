export default function TwitterTweetBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        tweet_id: this.get('tweet_id'),
        hide_media: this.get('hide_media'),
        hide_thread: this.get('hide_thread'),
      };
    }
  });
}
