// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/youtube-video-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class YoutubeVideoBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:youtube-video-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('id', T.StringType.create())
        .required()
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
      Fb.create('start_at', T.SmallIntType.create())
        .build(),
      /*
       * A reference to an image asset to use as the poster that will
       * override what is provided by youtube.
       */
      Fb.create('poster_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
