export default function GoogleMapBlockV1Trait(m) {
  Object.assign(m.prototype, {
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
