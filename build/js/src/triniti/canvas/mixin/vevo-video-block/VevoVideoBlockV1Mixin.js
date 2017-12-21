// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/vevo-video-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class VevoVideoBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:vevo-video-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('isrc', T.StringType.create())
        .required()
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
    ];
  }
}
