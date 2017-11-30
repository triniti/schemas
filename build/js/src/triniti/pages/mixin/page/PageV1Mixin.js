// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/page/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PageV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:pages:mixin:page:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The URL to use for the page
       */
      Fb.create('slug', T.StringType.create())
        .format(Format.SLUG)
        .build(),
    ];
  }
}
