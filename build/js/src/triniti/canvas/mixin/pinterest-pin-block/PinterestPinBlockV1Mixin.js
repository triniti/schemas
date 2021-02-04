export default function PinterestPinBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        href: this.get('href'),
        terse: this.get('terse'),
        size: this.get('size'),
      };
    }
  });
}
