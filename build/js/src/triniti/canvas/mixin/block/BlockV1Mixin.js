// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class BlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('etag', T.StringType.create())
        .maxLength(100)
        .pattern('^[\\w\\.:-]+$')
        .build(),
      /*
       * In rendering environments that support HTML the css_class
       * can be appended to the dom elements' class attribute.
       */
      Fb.create('css_class', T.StringType.create())
        .pattern('^[\\w\\s-]+$')
        .build(),
    ];
  }
}
