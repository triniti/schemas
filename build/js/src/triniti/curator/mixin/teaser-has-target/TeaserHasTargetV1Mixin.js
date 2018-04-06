// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser-has-target/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TeaserHasTargetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:teaser-has-target:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A reference to the target teaserable node this teaser is bound to.
       */
      Fb.create('target_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
