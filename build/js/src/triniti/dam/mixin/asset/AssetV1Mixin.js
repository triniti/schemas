// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/asset/1-0-1.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AssetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:asset:1-0-1');
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
      Fb.create('display_title', T.StringType.create())
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
       * A description of the asset (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      /*
       * A credit is a short string used to publicly acknowledge the source/creator
       * of the asset. e.g. "Fox News", "CNN".
       */
      Fb.create('credit', T.StringType.create())
        .build(),
      /*
       * A URL to link to the credit source.
       */
      Fb.create('credit_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      /*
       * Call to action text. e.g. "Click here"
       */
      Fb.create('cta_text', T.StringType.create())
        .build(),
      /*
       * A URL to link with the call to action text.
       */
      Fb.create('cta_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      /*
       * A set of node refs which have been linked to this asset.
       */
      Fb.create('linked_refs', T.IdentifierType.create())
        .asASet()
        .classProto(NodeRef)
        .build(),
      /*
       * A node ref referencing the gallery where the asset is used.
       */
      Fb.create('gallery_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * An integer value representing the order in which this asset will appear in a gallery.
       */
      Fb.create('gallery_seq', T.IntType.create())
        .build(),
    ];
  }
}
