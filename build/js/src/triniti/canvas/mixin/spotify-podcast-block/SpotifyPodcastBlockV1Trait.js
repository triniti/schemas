export default function SpotifyPodcastBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        episode_id: this.get('episode_id'),
        show_id: this.get('show_id'),
      };
    }
  });
}
