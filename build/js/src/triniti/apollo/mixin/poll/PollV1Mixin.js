// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PollV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:poll:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('allow_multiple_responses', T.BooleanType.create())
        .build(),
      Fb.create('answers', T.MessageType.create())
        .asAList()
        .anyOfCuries([
          'triniti:apollo:mixin:poll-answer',
        ])
        .build(),
    ];
  }
}
