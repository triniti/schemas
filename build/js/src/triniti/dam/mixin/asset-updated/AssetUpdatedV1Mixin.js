// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-updated/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AssetUpdatedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:asset-updated:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('new_node', T.MessageType.create())
        .required()
        .anyOfCuries([
          'triniti:dam:mixin:asset',
        ])
        .build(),
      /*
       * The entire node, as it appeared before it was modified.
       */
      Fb.create('old_node', T.MessageType.create())
        .anyOfCuries([
          'triniti:dam:mixin:asset',
        ])
        .build(),
    ];
  }
}
