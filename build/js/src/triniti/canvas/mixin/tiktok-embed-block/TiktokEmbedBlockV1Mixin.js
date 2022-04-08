// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/tiktok-embed-block/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TiktokEmbedBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:tiktok-embed-block:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('tiktok_id', T.StringType.create())
        .required()
        .pattern('^\\w+$')
        .build(),
      Fb.create('user_name', T.StringType.create())
        .required()
        .pattern('^\\w+$')
        .build(),
    ];
  }
}
