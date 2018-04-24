export default function VimeoVideoBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        video_id: this.get('video_id'),
        autoplay: this.get('autoplay'),
        loop: this.get('loop'),
        byline: this.get('byline'),
        portrait: this.get('portrait'),
        title: this.get('title'),
        poster_image_ref: this.get('poster_image_ref'),
      };
    }
  });
}
