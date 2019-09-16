// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset-patched/1-0-2.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AssetPatchedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:asset-patched:1-0-2');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('title', T.StringType.create())
        .build(),
      Fb.create('display_title', T.StringType.create())
        .build(),
      Fb.create('expires_at', T.DateTimeType.create())
        .build(),
      Fb.create('credit', T.StringType.create())
        .build(),
      Fb.create('credit_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('cta_text', T.StringType.create())
        .build(),
      Fb.create('cta_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
    ];
  }
}
