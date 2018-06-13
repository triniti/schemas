// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/reorder-gallery-assets/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ReorderGalleryAssetsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:reorder-gallery-assets:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The node ref for the gallery containing the assets being reordered.
       */
      Fb.create('gallery_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A map of asset ids to gallery sequence numbers.
       */
      Fb.create('gallery_seqs', T.IntType.create())
        .asAMap()
        .build(),
    ];
  }
}
