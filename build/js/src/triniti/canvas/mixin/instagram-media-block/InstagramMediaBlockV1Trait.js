export default function InstagramMediaBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        id: this.get('id'),
        hidecaption: this.get('hidecaption'),
      };
    }
  });
}
