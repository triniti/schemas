export default function YoutubeVideoBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        id: this.get('id'),
        autoplay: this.get('autoplay'),
        start_at: this.get('start_at'),
      };
    }
  });
}
