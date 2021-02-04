export default function TumblrPostBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        href: this.get('href'),
        canonical_url: this.get('canonical_url'),
      };
    }
  });
}
