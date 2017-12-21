// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-moment-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterMomentBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-moment-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('id', T.StringType.create())
        .required()
        .pattern('^\\d+$')
        .build(),
      Fb.create('title', T.StringType.create())
        .build(),
      Fb.create('limit', T.TinyIntType.create())
        .min(1)
        .max(20)
        .withDefault(1)
        .build(),
    ];
  }
}
