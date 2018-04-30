// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/search-people-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchPeopleSort from '@triniti/schemas/triniti/people/enums/SearchPeopleSort';
import T from '@gdbots/pbj/types';

export default class SearchPeopleRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:people:mixin:search-people-request:1-0-0');
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
        .withDefault(SearchPeopleSort.TITLE_ASC)
        .classProto(SearchPeopleSort)
        .build(),
    ];
  }
}
