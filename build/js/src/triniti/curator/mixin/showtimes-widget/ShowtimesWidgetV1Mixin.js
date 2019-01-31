// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/showtimes-widget/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ShowtimesWidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:showtimes-widget:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('show', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      Fb.create('include_latest_episode', T.BooleanType.create())
        .build(),
      Fb.create('include_latest_promo', T.BooleanType.create())
        .build(),
      Fb.create('show_excerpt', T.BooleanType.create())
        .build(),
      Fb.create('headline', T.StringType.create())
        .build(),
      Fb.create('excerpt', T.TextType.create())
        .build(),
      Fb.create('image_ref', T.IdentifierType.create())
        .build(),
    ];
  }
}
