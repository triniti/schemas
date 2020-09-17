export default function ArticleBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        node_ref: `${this.get('node_ref', '')}`,
        show_image: this.get('show_image'),
      };
    }
  });
}
