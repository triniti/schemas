// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/mixin/has-channel/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class HasChannelV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp.medialive:mixin:has-channel:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('medialive_channel_arn', T.StringType.create())
        .pattern('^[\\w:-]+$')
        .build(),
    ];
  }
}
