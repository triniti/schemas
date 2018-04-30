// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/search-categories-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchCategoriesSort from '@triniti/schemas/triniti/taxonomy/enums/SearchCategoriesSort';
import T from '@gdbots/pbj/types';

export default class SearchCategoriesRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:search-categories-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchCategoriesSort.TITLE_ASC)
        .classProto(SearchCategoriesSort)
        .build(),
    ];
  }
}
