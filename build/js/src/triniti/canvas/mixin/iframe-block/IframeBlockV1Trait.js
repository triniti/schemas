export default function IframeBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        src: this.get('src'),
        width: this.get('width'),
        height: this.get('height'),
        align: this.get('align'),
      };
    }
  });
}
