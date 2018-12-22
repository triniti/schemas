// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/render-widget-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class RenderWidgetResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:render-widget-response:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('from_cache', T.BooleanType.create())
        .build(),
      Fb.create('html', T.MediumTextType.create())
        .build(),
      Fb.create('search_response', T.MessageType.create())
        .anyOfCuries([
          'triniti:curator:mixin:widget-search-response',
        ])
        .build(),
    ];
  }
}
