// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/ad-widget/1-0-1.json#
import AdSize from '@triniti/schemas/triniti/common/enums/AdSize';
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AdWidgetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:ad-widget:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('ad_size', T.StringEnumType.create())
        .classProto(AdSize)
        .build(),
      Fb.create('dfp_ad_unit_path', T.StringType.create())
        .pattern('^[\\w\\/\\.:-]+$')
        .build(),
      Fb.create('dfp_cust_params', T.StringType.create())
        .asAMap()
        .pattern('^[\\w\\/\\.:-]+$')
        .build(),
      Fb.create('refresh_enabled', T.BooleanType.create())
        .build(),
      Fb.create('refresh_interval', T.SmallIntType.create())
        .build(),
    ];
  }
}
