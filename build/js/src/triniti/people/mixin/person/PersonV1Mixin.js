// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PersonId from '@triniti/schemas/triniti/people/PersonId';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PersonV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:people:mixin:person:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => PersonId.generate())
        .classProto(PersonId)
        .overridable(true)
        .build(),
      /*
       * A reference to the image asset to use for widgets, sharing, seo.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
