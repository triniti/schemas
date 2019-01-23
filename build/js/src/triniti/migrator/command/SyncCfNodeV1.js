// @link http://schemas.triniti.io/json-schema/triniti/migrator/command/sync-cf-node/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class SyncCfNodeV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:migrator:command:sync-cf-node:1-0-0', SyncCfNodeV1,
      [
        /*
         * The CrowdFusion element slug.
         */
        Fb.create('cf_element', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        /*
         * The CrowdFusion node slug.
         */
        Fb.create('cf_slug', T.StringType.create())
          .format(Format.SLUG)
          .build(),
      ],
      [
        GdbotsPbjxCommandV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(SyncCfNodeV1);
MessageResolver.register('triniti:migrator:command:sync-cf-node', SyncCfNodeV1);
Object.freeze(SyncCfNodeV1);
Object.freeze(SyncCfNodeV1.prototype);
