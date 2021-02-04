export default function ImgurPostBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        id: this.get('id'),
        show_context: this.get('show_context'),
      };
    }
  });
}
