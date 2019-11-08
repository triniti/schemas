// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/command/start-channel/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class StartChannelV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp.medialive:command:start-channel:1-0-0', StartChannelV1,
      [
        Fb.create('video_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
      ],
      [
        GdbotsPbjxCommandV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(StartChannelV1);
MessageResolver.register('triniti:ovp.medialive:command:start-channel', StartChannelV1);
Object.freeze(StartChannelV1);
Object.freeze(StartChannelV1.prototype);
