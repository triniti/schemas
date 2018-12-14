// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-promotion-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class RenderPromotionRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:render-promotion-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('promotion_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * The name of the slot to use for finding the promotion to render.
       * If promotion_ref is supplied this should be ignored.
       */
      Fb.create('slot', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      /*
       * Used to preview a time other than now of what a promotion slot will render.
       * This is primarily for CMS preview or unit testing.
       */
      Fb.create('render_at', T.DateTimeType.create())
        .build(),
      Fb.create('context', T.MessageType.create())
        .anyOfCuries([
          'triniti:common::render-context',
        ])
        .build(),
    ];
  }
}
