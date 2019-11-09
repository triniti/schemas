// @link http://schemas.triniti.io/json-schema/triniti/ovp.medialive/event/channel-started/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class ChannelStartedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp.medialive:event:channel-started:1-0-0', ChannelStartedV1,
      [
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
      ],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ChannelStartedV1);
MessageResolver.register('triniti:ovp.medialive:event:channel-started', ChannelStartedV1);
Object.freeze(ChannelStartedV1);
Object.freeze(ChannelStartedV1.prototype);
