// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/gallery-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GalleryBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:gallery-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('launch_text', T.StringType.create())
        .build(),
      /*
       * A reference to an image asset to use as the poster that will
       * override what is provided by the target gallery.
       */
      Fb.create('poster_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}