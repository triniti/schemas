export default function TiktokEmbedBlockV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        etag: this.get('etag'),
        tiktok_id: this.get('tiktok_id'),
        user_name: this.get('user_name'),
      };
    }
  });
}
