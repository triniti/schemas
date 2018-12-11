// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';
import WidgetId from '@triniti/schemas/triniti/curator/WidgetId';

export default class WidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:widget:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => WidgetId.generate())
        .classProto(WidgetId)
        .overridable(true)
        .build(),
      /*
       * A string containing HTML that is injected into
       * the application before the widget renders.
       */
      Fb.create('pre_render_code', T.TextType.create())
        .build(),
      /*
       * A string containing HTML that is injected into
       * the application after the widget renders.
       */
      Fb.create('post_render_code', T.TextType.create())
        .build(),
      Fb.create('show_header', T.BooleanType.create())
        .withDefault(true)
        .build(),
      Fb.create('header_text', T.StringType.create())
        .build(),
      Fb.create('view_all_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      Fb.create('view_all_text', T.StringType.create())
        .build(),
    ];
  }
}
