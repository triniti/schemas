// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/poll-grid-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PollGridBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:poll-grid-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * An array of poll refs to include in this block. It is
       * a list vs a set to allow sorting.
       */
      Fb.create('poll_refs', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
