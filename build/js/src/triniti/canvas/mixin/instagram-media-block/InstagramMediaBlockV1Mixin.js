export default function InstagramMediaBlockV1Mixin(M) {
  Object.assign(M.prototype, {
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
