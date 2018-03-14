// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/twitter-hashtag-button-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TwitterHashtagButtonBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:twitter-hashtag-button-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('hashtag', T.StringType.create())
        .required()
        .format(Format.HASHTAG)
        .build(),
      Fb.create('secondary_hashtags', T.StringType.create())
        .asASet()
        .format(Format.HASHTAG)
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
