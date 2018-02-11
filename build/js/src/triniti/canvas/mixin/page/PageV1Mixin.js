// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/page/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PageV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:page:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A reference to the image asset to use for widgets, sharing, seo.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A description of the page (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      /*
       * Determines if AMP (Accelerated Mobile Pages) should be enabled for this page.
       */
      Fb.create('amp_enabled', T.BooleanType.create())
        .withDefault(true)
        .build(),
    ];
  }
}
