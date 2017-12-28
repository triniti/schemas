// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/search-polls-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchPollsSort from '@triniti/schemas/triniti/apollo/enums/SearchPollsSort';
import T from '@gdbots/pbj/types';

export default class SearchPollsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:search-polls-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchPollsSort.RELEVANCE)
        .classProto(SearchPollsSort)
        .build(),
    ];
  }
}
