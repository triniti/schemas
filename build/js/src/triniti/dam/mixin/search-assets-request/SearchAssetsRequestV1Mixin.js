// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/search-assets-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchAssetsSort from '@triniti/schemas/triniti/dam/enums/SearchAssetsSort';
import T from '@gdbots/pbj/types';

export default class SearchAssetsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:search-assets-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchAssetsSort.RELEVANCE)
        .classProto(SearchAssetsSort)
        .build(),
    ];
  }
}
