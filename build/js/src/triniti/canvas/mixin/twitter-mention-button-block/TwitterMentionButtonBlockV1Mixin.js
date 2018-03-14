// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-mention-button-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterMentionButtonBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-mention-button-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('screen_name', T.StringType.create())
        .required()
        .pattern('^[\\w\\.]+$')
        .build(),
      Fb.create('prefill_text', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('recommended_accounts', T.StringType.create())
        .asASet()
        .pattern('^[\\w\\.]+$')
        .build(),
    ];
  }
}
