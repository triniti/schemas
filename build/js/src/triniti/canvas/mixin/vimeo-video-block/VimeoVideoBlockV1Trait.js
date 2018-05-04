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
        show_byline: this.get('show_byline'),
        show_portrait: this.get('show_portrait'),
        show_title: this.get('show_title'),
      };
    }
  });
}
