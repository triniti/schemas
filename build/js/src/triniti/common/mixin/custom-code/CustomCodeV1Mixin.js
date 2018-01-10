// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/custom-code/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class CustomCodeV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:common:mixin:custom-code:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A map containing (HTML, JavaScript, CSS, etc.) that is injected into
       * an application at a named insertion point, e.g. "html_head" or "footer".
       */
      Fb.create('custom_code', T.TextType.create())
        .asAMap()
        .build(),
    ];
  }
}
