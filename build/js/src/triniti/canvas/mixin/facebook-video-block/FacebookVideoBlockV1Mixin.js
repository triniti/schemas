// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/facebook-video-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class FacebookVideoBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:facebook-video-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('href', T.TextType.create())
        .required()
        .format(Format.URL)
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
      Fb.create('show_text', T.BooleanType.create())
        .build(),
      Fb.create('show_captions', T.BooleanType.create())
        .build(),
      /*
       * A reference to an image asset to use as the poster that will
       * override what is provided by facebook.
       */
      Fb.create('poster_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
