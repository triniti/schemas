export default function TwitterFollowButtonBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        screen_name: this.get('screen_name'),
        show_screen_name: this.get('show_screen_name'),
        show_count: this.get('show_count'),
      };
    }
  });
}
