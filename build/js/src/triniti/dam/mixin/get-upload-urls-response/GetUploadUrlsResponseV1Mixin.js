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
       * A map of asset ids with an md5 hash of the client file name as the
       * key and the generated asset id as the value.
       */
      Fb.create('asset_ids', T.IdentifierType.create())
        .asAMap()
        .classProto(AssetId)
        .build(),
      /*
       * A map of URLs with an md5 hash of the client file name as the key
       * and the S3 presigned URL as the value.
       */
      Fb.create('s3_presigned_urls', T.TextType.create())
        .asAMap()
        .format(Format.URL)
        .build(),
    ];
  }
}