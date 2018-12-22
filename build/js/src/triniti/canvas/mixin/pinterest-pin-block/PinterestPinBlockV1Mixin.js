// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/pinterest-pin-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PinterestPinBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:pinterest-pin-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('href', T.TextType.create())
        .required()
        .format(Format.URL)
        .build(),
      /*
       * When true, hides the description.
       */
      Fb.create('terse', T.BooleanType.create())
        .build(),
      Fb.create('size', T.StringType.create())
        .pattern('^[\\w-]+$')
        .withDefault("small")
        .build(),
    ];
  }
}
