export default function TiktokEmbedBlockV1Mixin(M) {
  Object.assign(M.prototype, {
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
