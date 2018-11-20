// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/sponsorable/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SponsorableV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:boost:mixin:sponsorable:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('sponsor_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}