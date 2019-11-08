// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/mixin/channel-stopped/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ChannelStoppedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp.medialive:mixin:channel-stopped:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('video_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
