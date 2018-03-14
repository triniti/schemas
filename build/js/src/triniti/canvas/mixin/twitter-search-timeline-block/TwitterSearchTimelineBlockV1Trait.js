export default function TwitterSearchTimelineBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        widget_id: this.get('widget_id'),
        tweet_limit: this.get('tweet_limit'),
      };
    }
  });
}
