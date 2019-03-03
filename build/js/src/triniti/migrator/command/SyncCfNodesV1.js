// @link http://schemas.triniti.io/json-schema/triniti/migrator/command/sync-cf-nodes/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class SyncCfNodesV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:migrator:command:sync-cf-nodes:1-0-0', SyncCfNodesV1,
      [
        /*
         * An array of CrowdFusion node refs with format element:slug.
         */
        Fb.create('cf_node_refs', T.StringType.create())
          .asASet()
          .pattern('^[a-z0-9-]+:[a-z0-9\\/-]+$')
          .build(),
      ],
      [
        GdbotsPbjxCommandV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(SyncCfNodesV1);
MessageResolver.register('triniti:migrator:command:sync-cf-nodes', SyncCfNodesV1);
Object.freeze(SyncCfNodesV1);
Object.freeze(SyncCfNodesV1.prototype);
