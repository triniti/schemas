// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PollId from '@triniti/schemas/triniti/apollo/PollId';
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
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => PollId.generate())
        .classProto(PollId)
        .overridable(true)
        .build(),
      /*
       * A reference to the image asset to use for widgets, sharing, seo.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
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
