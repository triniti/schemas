export default function SpotifyTrackBlockV1Mixin(M) {
  Object.assign(M.prototype, {
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
