// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-tweet-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterTweetBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-tweet-block:1-0-0');
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
      Fb.create('tweet_text', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('hide_media', T.BooleanType.create())
        .build(),
      Fb.create('hide_thread', T.BooleanType.create())
        .build(),
    ];
  }
}
