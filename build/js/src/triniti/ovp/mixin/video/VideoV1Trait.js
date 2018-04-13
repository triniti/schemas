export default function VideoV1Trait(m) {
  Object.assign(m.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        slug: this.get('slug'),
        mpm: this.get('mpm'),
        kaltura_entry_id: this.get('kaltura_entry_id'),
        kaltura_partner_id: this.get('kaltura_partner_id'),
        muted: this.get('muted'),
        is_live: this.get('is_live'),
      };
    }
  });
}
