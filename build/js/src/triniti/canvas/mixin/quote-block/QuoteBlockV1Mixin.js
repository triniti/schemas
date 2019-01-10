// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/quote-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class QuoteBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:quote-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('text', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('source', T.StringType.create())
        .build(),
      Fb.create('source_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('is_pull_quote', T.BooleanType.create())
        .build(),
    ];
  }
}
