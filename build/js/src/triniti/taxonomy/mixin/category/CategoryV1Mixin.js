// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/category/1-0-0.json#
import CategoryId from '@triniti/schemas/triniti/taxonomy/CategoryId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class CategoryV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:category:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => CategoryId.generate())
        .classProto(CategoryId)
        .overridable(true)
        .build(),
      /*
       * A reference to the image asset to use for widgets, sharing, seo.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A description of the category (usually a few sentences). It should typically
       * not have HTML as it is used in metadata.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
    ];
  }
}
