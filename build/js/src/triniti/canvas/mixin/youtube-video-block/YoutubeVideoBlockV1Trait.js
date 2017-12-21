export default function YoutubeVideoBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        id: this.get('id'),
        autoplay: this.get('autoplay'),
      };
    }
  });
}
