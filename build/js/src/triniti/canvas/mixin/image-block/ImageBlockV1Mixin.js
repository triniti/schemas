export default function ImageBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        node_ref: `${this.get('node_ref', '')}`,
        is_nswf: this.get('is_nswf'),
        url: this.get('url'),
        fallback_src_url: this.get('fallback_src_url'),
      };
    }
  });
}
