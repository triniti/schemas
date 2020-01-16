// @link http://schemas.triniti.io/json-schema/triniti/ovp.jwplayer/mixin/has-media/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class HasMediaV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp.jwplayer:mixin:has-media:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('jwplayer_media_id', T.StringType.create())
        .pattern('^[\\w-]+$')
        .build(),
    ];
  }
}
