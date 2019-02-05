// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-stats/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import PollId from '@triniti/schemas/triniti/apollo/PollId';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PollStatsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:poll-stats:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => PollId.generate())
        .classProto(PollId)
        .overridable(true)
        .build(),
      Fb.create('votes', T.IntType.create())
        .build(),
      /*
       * Map of votes for each answer keyed by the poll answer id.
       */
      Fb.create('answers', T.IntType.create())
        .asAMap()
        .build(),
    ];
  }
}
