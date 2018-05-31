// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/command/sync-entry/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class SyncEntryV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp.kaltura:command:sync-entry:1-0-0', SyncEntryV1,
      [
        Fb.create('entry', T.MessageType.create())
          .anyOfCuries([
            'triniti:ovp.kaltura::entry',
          ])
          .build(),
        Fb.create('flavors', T.MessageType.create())
          .asAList()
          .anyOfCuries([
            'triniti:ovp.kaltura::flavor',
          ])
          .build(),
        Fb.create('captions', T.MessageType.create())
          .asAList()
          .anyOfCuries([
            'triniti:ovp.kaltura::caption',
          ])
          .build(),
      ],
      [
        GdbotsPbjxCommandV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(SyncEntryV1);
MessageResolver.register('triniti:ovp.kaltura:command:sync-entry', SyncEntryV1);
Object.freeze(SyncEntryV1);
Object.freeze(SyncEntryV1.prototype);
