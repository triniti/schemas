// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget-has-search-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class WidgetHasSearchRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:widget-has-search-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * When nodes have been acquired by another process you can populate
       * this field instead of "search_request".
       */
      Fb.create('prefetched_nodes', T.MessageType.create())
        .asAList()
        .anyOfCuries([
          'gdbots:ncr:mixin:node',
        ])
        .build(),
      Fb.create('search_request', T.MessageType.create())
        .anyOfCuries([
          'triniti:curator:mixin:widget-search-request',
        ])
        .build(),
      Fb.create('show_pagination', T.BooleanType.create())
        .build(),
      Fb.create('show_item_cta_text', T.BooleanType.create())
        .build(),
      Fb.create('show_item_date', T.BooleanType.create())
        .build(),
      Fb.create('show_item_duration', T.BooleanType.create())
        .build(),
      Fb.create('show_item_excerpt', T.BooleanType.create())
        .build(),
      Fb.create('show_item_icon', T.BooleanType.create())
        .build(),
      Fb.create('show_item_media_count', T.BooleanType.create())
        .build(),
    ];
  }
}
