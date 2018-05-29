// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/search-sponsors-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchSponsorsSort from '@triniti/schemas/triniti/boost/enums/SearchSponsorsSort';
import T from '@gdbots/pbj/types';

export default class SearchSponsorsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:boost:mixin:search-sponsors-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchSponsorsSort.RELEVANCE)
        .classProto(SearchSponsorsSort)
        .build(),
    ];
  }
}
