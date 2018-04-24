// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/soundcloud-audio-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SoundcloudAudioBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:soundcloud-audio-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('track_id', T.StringType.create())
        .required()
        .pattern('^\\d+$')
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
      Fb.create('show_comments', T.BooleanType.create())
        .build(),
      Fb.create('show_recommendations', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('show_overlay', T.TextType.create())
        .maxLength(500)
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
