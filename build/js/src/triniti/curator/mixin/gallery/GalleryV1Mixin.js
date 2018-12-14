// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/gallery/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GalleryId from '@triniti/schemas/triniti/curator/GalleryId';
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
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => GalleryId.generate())
        .classProto(GalleryId)
        .overridable(true)
        .build(),
      /*
       * A reference to the image asset to use as the cover/primary.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A credit is a short string used to publicly acknowledge the source/creator
       * of the contents of this gallery. e.g. "Fox News", "CNN".
       */
      Fb.create('credit', T.StringType.create())
        .build(),
      Fb.create('allow_comments', T.BooleanType.create())
        .withDefault(true)
        .build(),
      Fb.create('launch_text', T.StringType.create())
        .build(),
      /*
       * A description of the gallery (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('image_count', T.MediumIntType.create())
        .build(),
      Fb.create('related_gallery_refs', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
