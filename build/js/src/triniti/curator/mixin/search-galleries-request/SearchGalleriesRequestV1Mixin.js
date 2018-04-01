// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-galleries-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchGalleriesSort from '@triniti/schemas/triniti/curator/enums/SearchGalleriesSort';
import T from '@gdbots/pbj/types';

export default class SearchGalleriesRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:search-galleries-request:1-0-0');
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
        .withDefault(SearchGalleriesSort.RELEVANCE)
        .classProto(SearchGalleriesSort)
        .build(),
    ];
  }
}
