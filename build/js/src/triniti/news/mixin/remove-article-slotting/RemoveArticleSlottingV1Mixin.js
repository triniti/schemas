// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/remove-article-slotting/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class RemoveArticleSlottingV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:remove-article-slotting:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The one node allowed to keep the slotting.
       */
      Fb.create('except_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A map of integers, e.g. {home: 1, sports: 5, tv: 9}, that must be
       * removed from nodes currently having those slotting values.
       */
      Fb.create('slotting', T.TinyIntType.create())
        .asAMap()
        .build(),
    ];
  }
}
