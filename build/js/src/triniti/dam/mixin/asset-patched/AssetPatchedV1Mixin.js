// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-patched/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AssetPatchedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:asset-patched:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('expires_at', T.DateTimeType.create())
        .build(),
      Fb.create('credit', T.StringType.create())
        .build(),
    ];
  }
}