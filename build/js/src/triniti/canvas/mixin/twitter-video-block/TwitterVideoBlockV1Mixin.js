// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-video-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterVideoBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-video-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('screen_name', T.StringType.create())
        .required()
        .pattern('^[\\w\\.]+$')
        .build(),
      Fb.create('tweet_id', T.StringType.create())
        .required()
        .pattern('^\\d+$')
        .build(),
      /*
       * A reference to an image asset to use as the poster that will
       * override what is provided by twitter.
       */
      Fb.create('poster_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
