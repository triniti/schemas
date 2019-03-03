// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/search-articles-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
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
        .build(),
      Fb.create('is_locked', T.TrinaryType.create())
        .build(),
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchArticlesSort.RELEVANCE)
        .classProto(SearchArticlesSort)
        .build(),
      /*
       * The name of the slotting key to use to determine the order of
       * articles returned in the response. e.g. "home", "sports", "tv"
       */
      Fb.create('slotting_key', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      Fb.create('channel_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      Fb.create('category_refs', T.IdentifierType.create())
        .asASet()
        .classProto(NodeRef)
        .build(),
      Fb.create('person_refs', T.IdentifierType.create())
        .asASet()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
