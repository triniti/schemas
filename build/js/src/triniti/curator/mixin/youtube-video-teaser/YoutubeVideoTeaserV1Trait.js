export default function YoutubeVideoTeaserV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        youtube_video_id: this.get('youtube_video_id'),
      };
    }
  });
}
