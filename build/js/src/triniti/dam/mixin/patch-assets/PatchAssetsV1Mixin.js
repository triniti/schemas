// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/patch-assets/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PatchAssetsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:patch-assets:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('node_refs', T.IdentifierType.create())
        .asASet()
        .classProto(NodeRef)
        .build(),
      /*
       * The names of the fields this patch event should apply changes to.
       */
      Fb.create('fields', T.StringType.create())
        .asASet()
        .pattern('^[a-zA-Z_]{1}[a-zA-Z0-9_]*$')
        .build(),
      Fb.create('expires_at', T.DateTimeType.create())
        .build(),
      Fb.create('credit', T.StringType.create())
        .build(),
    ];
  }
}
