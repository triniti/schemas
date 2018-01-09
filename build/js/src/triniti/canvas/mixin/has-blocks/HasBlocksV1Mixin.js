// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/has-blocks/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class HasBlocksV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:has-blocks:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('blocks', T.MessageType.create())
        .asAList()
        .anyOfCuries([
          'triniti:canvas:mixin:block',
        ])
        .build(),
    ];
  }
}
