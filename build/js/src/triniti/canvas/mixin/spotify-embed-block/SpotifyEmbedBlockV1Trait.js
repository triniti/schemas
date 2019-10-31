export default function SpotifyEmbedBlockV1Trait(m) {
  Object.assign(m.prototype, {
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
