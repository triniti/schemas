// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/divider-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class DividerBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:divider-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('text', T.StringType.create())
        .build(),
      Fb.create('stroke_color', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      Fb.create('stroke_style', T.StringType.create())
        .format(Format.SLUG)
        .build(),
    ];
  }
}
