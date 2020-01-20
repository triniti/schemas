// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/document-block/1-0-1.json#
import AspectRatio from '@triniti/schemas/triniti/common/enums/AspectRatio';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class DocumentBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:document-block:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('launch_text', T.StringType.create())
        .build(),
      Fb.create('aspect_ratio', T.StringEnumType.create())
        .classProto(AspectRatio)
        .build(),
      /*
       * An optional reference to an image asset to use as the poster.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * For imported document blocks it may be necessary to store the old URL.
       */
      Fb.create('fallback_src_url', T.TextType.create())
        .format(Format.URL)
        .build(),
    ];
  }
}
