// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/blogroll-widget/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class BlogrollWidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:blogroll-widget:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The name of the slot that will contain a promotion
       * with the widgets that will be used for the "in-between"
       * aka "separators" in the blogroll.
       */
      Fb.create('promotion_slot', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      /*
       * Whether or not the widget should render with an option
       * to load more content.
       */
      Fb.create('load_more_enabled', T.BooleanType.create())
        .withDefault(true)
        .build(),
      /*
       * Whether or not the widget should render with an option
       * to load more content.
       */
      Fb.create('load_more_text', T.StringType.create())
        .build(),
      /*
       * Whether or not the widget should load more content
       * infinitely.
       */
      Fb.create('load_more_infinite', T.BooleanType.create())
        .build(),
    ];
  }
}
