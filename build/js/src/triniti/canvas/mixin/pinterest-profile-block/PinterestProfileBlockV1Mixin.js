// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/pinterest-profile-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PinterestProfileBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:pinterest-profile-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('href', T.StringType.create())
        .required()
        .format(Format.URL)
        .build(),
      Fb.create('size', T.StringType.create())
        .pattern('^[\\w-]+$')
        .withDefault("square")
        .build(),
    ];
  }
}
