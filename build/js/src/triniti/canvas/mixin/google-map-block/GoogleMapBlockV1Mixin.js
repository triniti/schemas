export default function GoogleMapBlockV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        q: this.get('q'),
        center: `${this.get('center', '')}`,
        zoom: this.get('zoom'),
        maptype: this.get('maptype'),
      };
    }
  });
}
