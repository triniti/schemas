export default function YoutubeVideoTeaserV1Mixin(M) {
  Object.assign(M.prototype, {
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
