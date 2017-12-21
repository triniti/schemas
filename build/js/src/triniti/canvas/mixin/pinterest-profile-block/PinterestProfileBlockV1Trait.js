export default function PinterestProfileBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        href: this.get('href'),
        size: this.get('size'),
      };
    }
  });
}
