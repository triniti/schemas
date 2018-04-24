export default function SoundcloudAudioBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        track_id: this.get('track_id'),
        auto_play: this.get('autoplay'),
        show_comments: this.get('show_comments'),
        hide_related: this.get('show_recommendations'),
        visual: this.get('show_overlay'),
        poster_image_ref: this.get('poster_image_ref'),
      };
    }
  });
}
