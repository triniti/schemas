export default function VideoBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        node_ref: `${this.get('node_ref', '')}`,
        autoplay: this.get('autoplay'),
        muted: this.get('muted'),
        start_at: this.get('start_at'),
        show_more_videos: this.get('show_more_videos'),
      };
    }
  });
}
