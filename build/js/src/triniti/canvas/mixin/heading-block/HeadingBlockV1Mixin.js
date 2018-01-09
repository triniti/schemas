// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/heading-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class HeadingBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:heading-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('text', T.TextType.create())
        .maxLength(2000)
        .build(),
      Fb.create('size', T.TinyIntType.create())
        .max(6)
        .build(),
      Fb.create('url', T.StringType.create())
        .format(Format.URL)
        .build(),
    ];
  }
}
