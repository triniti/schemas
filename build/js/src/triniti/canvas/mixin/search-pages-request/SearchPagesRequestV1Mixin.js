// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/search-pages-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchPagesSort from '@triniti/schemas/triniti/canvas/enums/SearchPagesSort';
import T from '@gdbots/pbj/types';

export default class SearchPagesRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:search-pages-request:1-0-0');
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
        .withDefault(SearchPagesSort.RELEVANCE)
        .classProto(SearchPagesSort)
        .build(),
    ];
  }
}
