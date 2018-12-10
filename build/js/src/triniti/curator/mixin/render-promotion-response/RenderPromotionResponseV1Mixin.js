// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-promotion-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class RenderPromotionResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:render-promotion-response:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('from_cache', T.BooleanType.create())
        .build(),
      Fb.create('promotion', T.MessageType.create())
        .anyOfCuries([
          'triniti:curator:mixin:promotion',
        ])
        .build(),
      Fb.create('widgets', T.MessageType.create())
        .asAList()
        .anyOfCuries([
          'triniti:curator:mixin:render-widget-response',
        ])
        .build(),
    ];
  }
}
