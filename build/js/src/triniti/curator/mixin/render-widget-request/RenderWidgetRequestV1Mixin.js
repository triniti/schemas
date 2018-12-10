// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-widget-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class RenderWidgetRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:render-widget-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('widget_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      Fb.create('widget', T.MessageType.create())
        .anyOfCuries([
          'triniti:curator:mixin:widget',
        ])
        .build(),
      Fb.create('context', T.MessageType.create())
        .anyOfCuries([
          'triniti:common::render-context',
        ])
        .build(),
    ];
  }
}
