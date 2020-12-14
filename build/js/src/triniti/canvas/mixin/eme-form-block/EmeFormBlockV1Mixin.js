// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/eme-form-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class EmeFormBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:eme-form-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('solicit_id', T.StringType.create())
        .required()
        .pattern('^[\\w\\/-]+$')
        .build(),
      /*
       * Represents the date on which the solicit is set to expire.
       */
      Fb.create('expiration_date', T.DateTimeType.create())
        .build(),
    ];
  }
}
