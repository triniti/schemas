// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/carousel-widget/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class CarouselWidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:carousel-widget:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * Whether or not the widget should render with captions.
       */
      Fb.create('show_captions', T.BooleanType.create())
        .withDefault(true)
        .build(),
      /*
       * Whether or not the widget should render with controls
       * (e.g. arrows).
       */
      Fb.create('show_controls', T.BooleanType.create())
        .withDefault(true)
        .build(),
      /*
       * Whether or not the widget should render with position
       * indicators (e.g. dots).
       */
      Fb.create('show_position_indicators', T.BooleanType.create())
        .withDefault(true)
        .build(),
    ];
  }
}
