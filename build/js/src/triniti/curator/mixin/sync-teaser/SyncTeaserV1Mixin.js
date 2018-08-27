// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/sync-teaser/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SyncTeaserV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:sync-teaser:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The target - every teaser that teases this target
       * will be synced (if set to sync_with_target).
       */
      Fb.create('target', T.MessageType.create())
        .anyOfCuries([
          'triniti:curator:mixin:teaserable',
        ])
        .build(),
      /*
       * A reference to the target - every teaser that teases this target
       * will be synced (if set to sync_with_target).
       */
      Fb.create('target_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A reference to the teaser that will be synced to its target.
       */
      Fb.create('teaser_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
