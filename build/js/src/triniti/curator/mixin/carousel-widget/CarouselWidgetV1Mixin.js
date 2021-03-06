export default function CarouselWidgetV1Mixin(M) {
  Object.assign(M.prototype, {
    /**
     * @returns {Object}
     */
    getUriTemplateVars() {
      return {
        _id: `${this.get('_id', '')}`,
        show_captions: this.get('show_captions'),
        show_controls: this.get('show_controls'),
        show_position_indicators: this.get('show_position_indicators'),
      };
    }
  });
}
