// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset/1-0-0.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AssetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:asset:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .classProto(AssetId)
        .build(),
      Fb.create('mime_type', T.StringType.create())
        .required()
        .pattern('^[\\w-]+\\/[\\w\\+\\.-]+$')
        .build(),
      /*
       * The file size in bytes.
       */
      Fb.create('file_size', T.BigIntType.create())
        .build(),
      /*
       * An etag created from the file itself. The file etag is different from the
       * node's etag because the node tracks metadata, which can be updated without
       * the file being changed.
       */
      Fb.create('file_etag', T.StringType.create())
        .maxLength(100)
        .pattern('^[\\w\\.:-]+$')
        .build(),
      /*
       * A set of noderefs that identify entities which have been associated with
       * this asset.
       */
      Fb.create('associated_refs', T.IdentifierType.create())
        .asASet()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
