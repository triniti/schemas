// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-answer/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PollAnswerV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:poll-answer:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.UuidType.create())
        .required()
        .build(),
      Fb.create('title', T.StringType.create())
        .build(),
      Fb.create('url', T.StringType.create())
        .format(Format.URL)
        .build(),
      Fb.create('initial_votes', T.IntType.create())
        .build(),
    ];
  }
}
