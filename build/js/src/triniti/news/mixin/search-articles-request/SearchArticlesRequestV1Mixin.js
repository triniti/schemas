// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/search-articles-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchArticlesSort from '@triniti/schemas/triniti/news/enums/SearchArticlesSort';
import T from '@gdbots/pbj/types';

export default class SearchArticlesRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:search-articles-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('is_unlisted', T.TrinaryType.create())
        .withDefault(2)
        .build(),
      Fb.create('is_locked', T.TrinaryType.create())
        .build(),
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchArticlesSort.RELEVANCE)
        .classProto(SearchArticlesSort)
        .build(),
      /*
       * A node ref of a timeline that an article must be slotted into to match the search request.
       * This is only applicable or used when articles are slottable.
       */
      Fb.create('timeline_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
