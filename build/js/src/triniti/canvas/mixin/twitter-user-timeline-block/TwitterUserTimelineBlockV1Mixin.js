// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-user-timeline-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterUserTimelineBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-user-timeline-block:1-0-0');
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
      Fb.create('show_replies', T.BooleanType.create())
        .build(),
      Fb.create('tweet_limit', T.TinyIntType.create())
        .min(1)
        .max(20)
        .withDefault(1)
        .build(),
    ];
  }
}
