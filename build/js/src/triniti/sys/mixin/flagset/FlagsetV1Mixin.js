// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/flagset/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import FlagsetId from '@triniti/schemas/triniti/sys/FlagsetId';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class FlagsetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:sys:mixin:flagset:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .classProto(FlagsetId)
        .overridable(true)
        .build(),
      Fb.create('string_flags', T.StringType.create())
        .asAMap()
        .build(),
      Fb.create('int_flags', T.IntType.create())
        .asAMap()
        .build(),
      Fb.create('boolean_flags', T.BooleanType.create())
        .asAMap()
        .build(),
    ];
  }
}
