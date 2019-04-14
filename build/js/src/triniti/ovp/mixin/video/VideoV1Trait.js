export default function VideoV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        slug: this.get('slug'),
        is_live: this.get('is_live'),
        is_full_episode: this.get('is_full_episode'),
        is_promo: this.get('is_promo'),
        mpm: this.get('mpm'),
        kaltura_entry_id: this.get('kaltura_entry_id'),
        kaltura_partner_id: this.get('kaltura_partner_id'),
        show: this.get('show'),
      };
    }
  });
}
