// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/swipeable/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SwipeableV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:common:mixin:swipeable:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A string to be used as a swipe decoration.
       */
      Fb.create('swipe', T.StringType.create())
        .build(),
      /*
       * A string to be used as a soft swipe decoration.
       */
      Fb.create('soft_swipe', T.StringType.create())
        .build(),
    ];
  }
}
