// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/search-videos-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchVideosSort from '@triniti/schemas/triniti/ovp/enums/SearchVideosSort';
import T from '@gdbots/pbj/types';

export default class SearchVideosRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:search-videos-request:1-0-0');
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
        .withDefault(SearchVideosSort.RELEVANCE)
        .classProto(SearchVideosSort)
        .build(),
      Fb.create('show', T.StringType.create())
        .build(),
    ];
  }
}
