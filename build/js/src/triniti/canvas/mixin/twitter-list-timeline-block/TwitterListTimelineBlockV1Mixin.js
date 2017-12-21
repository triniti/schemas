// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-list-timeline-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterListTimelineBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-list-timeline-block:1-0-0');
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
      Fb.create('list_slug', T.StringType.create())
        .required()
        .format(Format.SLUG)
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
