// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-upload-urls-request/1-0-0.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GetUploadUrlsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:get-upload-urls-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('files', T.StringType.create())
        .asAList()
        .build(),
      /*
       * When requesting a url for a variant on an existing asset you should
       * provide the asset_id and the version and optionally the quality.
       */
      Fb.create('asset_id', T.IdentifierType.create())
        .classProto(AssetId)
        .build(),
      Fb.create('quality', T.StringType.create())
        .pattern('^[\\w\\.-]+$')
        .build(),
      Fb.create('version', T.StringType.create())
        .pattern('^[\\w\\.-]+$')
        .build(),
    ];
  }
}
