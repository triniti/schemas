// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/gallery-asset-reordered/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GalleryAssetReorderedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:gallery-asset-reordered:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The asset's node ref.
       */
      Fb.create('node_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      /*
       * An integer value representing the order in which this asset will appear in a gallery.
       */
      Fb.create('gallery_seq', T.IntType.create())
        .build(),
      /*
       * The node ref for the gallery where the asset is used.
       */
      Fb.create('gallery_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
