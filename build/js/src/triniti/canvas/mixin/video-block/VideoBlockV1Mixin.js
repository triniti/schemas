// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/video-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class VideoBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:video-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
      Fb.create('muted', T.BooleanType.create())
        .build(),
      Fb.create('start_at', T.SmallIntType.create())
        .build(),
      Fb.create('show_more_videos', T.BooleanType.create())
        .build(),
      /*
       * A reference to an image asset to use as the poster that will
       * override what is provided by the target video.
       */
      Fb.create('poster_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
