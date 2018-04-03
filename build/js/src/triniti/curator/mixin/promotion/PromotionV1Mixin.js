// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PromotionV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:promotion:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The name of the location where the promotion should render,
       * e.g. "desktop-home-sidebar" or "smartphone-global-html-head".
       */
      Fb.create('slot', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      /*
       * A string containing (HTML, JavaScript, CSS, etc.) that is injected into
       * the application before the widgets render.
       */
      Fb.create('pre_render_code', T.TextType.create())
        .build(),
      /*
       * A string containing (HTML, JavaScript, CSS, etc.) that is injected into
       * the application after the widgets render.
       */
      Fb.create('post_render_code', T.TextType.create())
        .build(),
      /*
       * A list of widget node refs that this promotion will render.
       */
      Fb.create('widget_refs', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
