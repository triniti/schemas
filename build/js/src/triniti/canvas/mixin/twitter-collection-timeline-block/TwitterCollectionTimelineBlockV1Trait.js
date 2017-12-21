export default function TwitterCollectionTimelineBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        collection_id: this.get('collection_id'),
        collection_title: this.get('collection_title'),
        show_replies: this.get('show_replies'),
        tweet_limit: this.get('tweet_limit'),
      };
    }
  });
}
