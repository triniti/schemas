// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/search-articles-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchArticlesSort from '@triniti/schemas/triniti/news/enums/SearchArticlesSort';
import T from '@gdbots/pbj/types';

export default class SearchArticlesRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:search-articles-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchArticlesSort.RELEVANCE)
        .classProto(SearchArticlesSort)
        .build(),
    ];
  }
}
