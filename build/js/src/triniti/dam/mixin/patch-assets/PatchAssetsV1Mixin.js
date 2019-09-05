// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/patch-assets/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PatchAssetsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:patch-assets:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('title', T.StringType.create())
        .build(),
      Fb.create('expires_at', T.DateTimeType.create())
        .build(),
      Fb.create('credit', T.StringType.create())
        .build(),
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
    ];
  }
}
