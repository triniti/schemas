// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-promotions-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchPromotionsSort from '@triniti/schemas/triniti/curator/enums/SearchPromotionsSort';
import T from '@gdbots/pbj/types';

export default class SearchPromotionsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:search-promotions-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchPromotionsSort.RELEVANCE)
        .classProto(SearchPromotionsSort)
        .build(),
    ];
  }
}
