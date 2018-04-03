// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/search-teasers-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchTeasersSort from '@triniti/schemas/triniti/curator/enums/SearchTeasersSort';
import T from '@gdbots/pbj/types';

export default class SearchTeasersRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:search-teasers-request:1-0-0');
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
        .withDefault(SearchTeasersSort.ORDER_DATE_DESC)
        .classProto(SearchTeasersSort)
        .build(),
      /*
       * A set of teaser types (node must match at least one) to include in
       * the search results, such as image-teaser or video-teaser.
       */
      Fb.create('types', T.StringType.create())
        .asASet()
        .format(Format.SLUG)
        .build(),
      /*
       * A node ref of a gallery that a teaser must be associated with to match the search request.
       */
      Fb.create('gallery_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A node ref of a list that a teaser must be associated with to match the search request.
       */
      Fb.create('list_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
