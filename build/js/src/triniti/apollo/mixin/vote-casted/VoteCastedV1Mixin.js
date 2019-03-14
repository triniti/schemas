// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/vote-casted/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class VoteCastedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:vote-casted:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('poll_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      Fb.create('answer_id', T.UuidType.create())
        .build(),
      /*
       * "s256" means shard 256. Used to distribute read/write from storage and speed up
       * replay/reindex processes. It can also be used to distribute workload in front end
       * user interfaces or notifications (like isles in a grocery store).
       * This value should NOT change once set.
       */
      Fb.create('s256', T.TinyIntType.create())
        .build(),
      /*
       * "s32" means shard 32. See field "s256" for explanation.
       */
      Fb.create('s32', T.TinyIntType.create())
        .build(),
      /*
       * "s16" means shard 16. See field "s256" for explanation.
       */
      Fb.create('s16', T.TinyIntType.create())
        .build(),
    ];
  }
}
