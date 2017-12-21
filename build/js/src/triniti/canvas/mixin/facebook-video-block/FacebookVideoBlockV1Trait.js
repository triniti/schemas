export default function FacebookVideoBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        href: this.get('href'),
        autoplay: this.get('autoplay'),
        show_text: this.get('show_text'),
        show_captions: this.get('show_captions'),
      };
    }
  });
}
