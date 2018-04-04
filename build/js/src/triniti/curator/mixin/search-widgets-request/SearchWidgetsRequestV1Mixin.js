// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-widgets-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchWidgetsSort from '@triniti/schemas/triniti/curator/enums/SearchWidgetsSort';
import T from '@gdbots/pbj/types';

export default class SearchWidgetsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:search-widgets-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchWidgetsSort.RELEVANCE)
        .classProto(SearchWidgetsSort)
        .build(),
    ];
  }
}
