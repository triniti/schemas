// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-lists-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchListsSort from '@triniti/schemas/triniti/curator/enums/SearchListsSort';
import T from '@gdbots/pbj/types';

export default class SearchListsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:search-lists-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('is_unlisted', T.TrinaryType.create())
        .withDefault(2)
        .build(),
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchListsSort.RELEVANCE)
        .classProto(SearchListsSort)
        .build(),
    ];
  }
}
