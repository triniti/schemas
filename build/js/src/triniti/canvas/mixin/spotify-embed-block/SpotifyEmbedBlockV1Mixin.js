export default function SpotifyEmbedBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        spotify_type: this.get('spotify_type'),
        spotify_id: this.get('spotify_id'),
      };
    }
  });
}
