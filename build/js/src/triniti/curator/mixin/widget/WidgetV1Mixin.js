// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/widget/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';
import WidgetId from '@triniti/schemas/triniti/curator/WidgetId';

export default class WidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:widget:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => WidgetId.generate())
        .classProto(WidgetId)
        .overridable(true)
        .build(),
    ];
  }
}
