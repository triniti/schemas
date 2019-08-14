// @link http://schemas.triniti.io/json-schema/triniti/sys/command/purge-cache/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class PurgeCacheV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:sys:command:purge-cache:1-0-0', PurgeCacheV1,
      [
        Fb.create('node_ref', T.IdentifierType.create())
          .classProto(NodeRef)
          .build(),
      ],
      [
        GdbotsPbjxCommandV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(PurgeCacheV1);
MessageResolver.register('triniti:sys:command:purge-cache', PurgeCacheV1);
Object.freeze(PurgeCacheV1);
Object.freeze(PurgeCacheV1.prototype);
