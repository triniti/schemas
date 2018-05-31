// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/themeable/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ThemeableV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:common:mixin:themeable:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A string used to provide a visual treatment to
       * a piece of content, e.g. "christmas" or "taco".
       */
      Fb.create('theme', T.StringType.create())
        .format(Format.SLUG)
        .build(),
    ];
  }
}
