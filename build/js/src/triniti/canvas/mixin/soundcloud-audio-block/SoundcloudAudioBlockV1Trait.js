export default function SoundcloudAudioBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        track_id: this.get('track_id'),
        auto_play: this.get('auto_play'),
        show_comments: this.get('show_comments'),
        hide_related: this.get('hide_related'),
        visual: this.get('visual'),
      };
    }
  });
}
