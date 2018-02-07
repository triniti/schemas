// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/search-assets-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
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
      /*
       * A set of asset types (node must match at least one) to include in
       * the search results, such as image-asset or video-asset.
       */
      Fb.create('types', T.StringType.create())
        .asASet()
        .format(Format.SLUG)
        .build(),
      /*
       * A reference to an entity to search for its associated assets.
       */
      Fb.create('associated_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
