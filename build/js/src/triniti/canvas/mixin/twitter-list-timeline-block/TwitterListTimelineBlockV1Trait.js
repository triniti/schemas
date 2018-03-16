export default function TwitterListTimelineBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        list_slug: this.get('list_slug'),
        tweet_limit: this.get('tweet_limit'),
      };
    }
  });
}
