// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/vimeo-video-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class VimeoVideoBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:vimeo-video-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('video_id', T.StringType.create())
        .required()
        .pattern('^\\d+$')
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
      Fb.create('loop', T.BooleanType.create())
        .build(),
      /*
       * Whether or not to show the byline (eg "from Dick Tracy") in the thumbnail.
       */
      Fb.create('byline', T.BooleanType.create())
        .build(),
      /*
       * Whether or not to show the portrait (profile image) in the thumbnail.
       */
      Fb.create('portrait', T.BooleanType.create())
        .build(),
      /*
       * Whether or not to show the video title in the thumbnail.
       */
      Fb.create('title', T.BooleanType.create())
        .build(),
      Fb.create('description_text', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('title_text', T.TextType.create())
        .maxLength(500)
        .build(),
      Fb.create('user_name', T.TextType.create())
        .maxLength(50)
        .build(),
      /*
       * A reference to an image asset to use as the poster that will
       * override what is provided by vimeo.
       */
      Fb.create('poster_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
