// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/iframe-block/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class IframeBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:iframe-block:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('src', T.TextType.create())
        .required()
        .format(Format.URL)
        .build(),
      Fb.create('width', T.StringType.create())
        .pattern('^\\d+(%|px)?$')
        .build(),
      Fb.create('height', T.StringType.create())
        .pattern('^\\d+(%|px)?$')
        .build(),
      Fb.create('align', T.StringType.create())
        .pattern('^(center|right|left)$')
        .build(),
      /*
       * When true the embedded iFrame will get a scrollbar
       */
      Fb.create('scrolling_enabled', T.BooleanType.create())
        .build(),
      /*
       * A map containing values for the data-* attributes
       */
      Fb.create('data', T.StringType.create())
        .asAMap()
        .build(),
    ];
  }
}
