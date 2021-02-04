export default function IframeBlockV1Mixin(M) {
  Object.assign(M.prototype, {
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
