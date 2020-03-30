export default function TumblrPostBlockV1Trait(m) {
  Object.assign(m.prototype, {
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
