// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GalleryV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:gallery:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A reference to the image asset to use as the cover/primary.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      Fb.create('allow_comments', T.BooleanType.create())
        .withDefault(true)
        .build(),
      /*
       * A description of the gallery (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('related_galleries', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}