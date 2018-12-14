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
      Fb.create('search_request', T.MessageType.create())
        .anyOfCuries([
          'triniti:curator:mixin:widget-search-request',
        ])
        .build(),
    ];
  }
}
