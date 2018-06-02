// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/advertising/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AdvertisingV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:common:mixin:advertising:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('ads_enabled', T.BooleanType.create())
        .build(),
      Fb.create('dfp_cust_params', T.StringType.create())
        .asAMap()
        .build(),
    ];
  }
}
