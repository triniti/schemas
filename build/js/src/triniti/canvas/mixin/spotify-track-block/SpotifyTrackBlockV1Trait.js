export default function SpotifyTrackBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        track_id: this.get('track_id'),
      };
    }
  });
}
