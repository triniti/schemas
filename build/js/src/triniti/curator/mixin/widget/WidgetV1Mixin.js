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
      Fb.create('search_request', T.MessageType.create())
        .anyOfCuries([
          'gdbots:ncr:mixin:search-nodes-request',
        ])
        .build(),
      /*
       * The href/url for the view all option.
       */
      Fb.create('view_all_link_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * The label for the view all option.
       */
      Fb.create('view_all_link_text', T.StringType.create())
        .build(),
      /*
       * The text to be rendered in the header.
       */
      Fb.create('header_text', T.StringType.create())
        .build(),
      /*
       * The href/url for the header button.
       */
      Fb.create('header_button_link_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * The label to be rendered in the header button.
       */
      Fb.create('header_button_link_text', T.StringType.create())
        .build(),
      /*
       * Whether or not to render the header.
       */
      Fb.create('show_header', T.BooleanType.create())
        .build(),
      /*
       * The text to be rendered in the footer.
       */
      Fb.create('footer_text', T.StringType.create())
        .build(),
      /*
       * The href/url for the footer button.
       */
      Fb.create('footer_button_link_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * The label to be rendered in the footer button.
       */
      Fb.create('footer_button_link_text', T.StringType.create())
        .build(),
      /*
       * Whether or not to render the footer.
       */
      Fb.create('show_footer', T.BooleanType.create())
        .build(),
    ];
  }
}
