// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/search-redirects-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchRedirectsSort from '@triniti/schemas/triniti/sys/enums/SearchRedirectsSort';
import T from '@gdbots/pbj/types';

export default class SearchRedirectsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:sys:mixin:search-redirects-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('is_permanent', T.TrinaryType.create())
        .build(),
      Fb.create('is_vanity', T.TrinaryType.create())
        .build(),
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchRedirectsSort.TITLE_ASC)
        .classProto(SearchRedirectsSort)
        .build(),
    ];
  }
}
