export default function SoundcloudAudioBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        track_id: this.get('track_id'),
        autoplay: this.get('autoplay'),
        show_comments: this.get('show_comments'),
        show_recommendations: this.get('show_recommendations'),
        show_overlay: this.get('show_overlay'),
        poster_image_ref: this.get('poster_image_ref'),
      };
    }
  });
}
