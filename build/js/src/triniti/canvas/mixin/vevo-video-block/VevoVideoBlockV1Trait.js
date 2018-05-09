export default function VevoVideoBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        isrc: this.get('isrc'),
        autoplay: this.get('autoplay'),
      };
    }
  });
}
