export default function YoutubePlaylistBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        playlist_id: this.get('playlist_id'),
        video_id: this.get('video_id'),
        autoplay: this.get('autoplay'),
      };
    }
  });
}
