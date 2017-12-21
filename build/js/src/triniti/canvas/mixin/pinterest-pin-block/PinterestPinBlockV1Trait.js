export default function PinterestPinBlockV1Trait(m) {
  Object.assign(m.prototype, {
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
