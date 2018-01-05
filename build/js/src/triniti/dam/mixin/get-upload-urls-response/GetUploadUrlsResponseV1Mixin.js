// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/get-upload-urls-response/1-0-0.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GetUploadUrlsResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:get-upload-urls-response:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A map of asset ids with the hash of the asset's url as the key and the asset id as the value
       */
      Fb.create('asset_ids', T.IdentifierType.create())
        .asAMap()
        .classProto(AssetId)
        .build(),
      /*
       * A map of asset urls with the hash of the asset's url as the key and the url as the value
       */
      Fb.create('s3_presigned_urls', T.StringType.create())
        .asAMap()
        .format(Format.URL)
        .build(),
    ];
  }
}
