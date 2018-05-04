// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/picklist/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import PicklistId from '@triniti/schemas/triniti/sys/PicklistId';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PicklistV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:sys:mixin:picklist:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .classProto(PicklistId)
        .overridable(true)
        .build(),
      Fb.create('options', T.StringType.create())
        .asAList()
        .build(),
      Fb.create('alpha_sort', T.BooleanType.create())
        .build(),
      Fb.create('allow_other', T.BooleanType.create())
        .build(),
      Fb.create('default_value', T.StringType.create())
        .build(),
    ];
  }
}
