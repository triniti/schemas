// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person-updated/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PersonUpdatedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:people:mixin:person-updated:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('new_node', T.MessageType.create())
        .required()
        .anyOfCuries([
          'triniti:people:mixin:person',
        ])
        .build(),
      /*
       * The entire node, as it appeared before it was modified.
       */
      Fb.create('old_node', T.MessageType.create())
        .anyOfCuries([
          'triniti:people:mixin:person',
        ])
        .build(),
    ];
  }
}
