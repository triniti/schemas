// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/headline-fragments/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class HeadlineFragmentsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:headline-fragments:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The "hf" field is an array of strings, aka headline fragments, that
       * are written for dramatic effect. These are good for visual display
       * but don't generally read well and are not great for SEO. They're
       * basically microbroetry.
       */
      Fb.create('hf', T.StringType.create())
        .asAList()
        .build(),
      /*
       * This array corresponds to the "hf" field. Any visual treatments that
       * need to be applied would have a value in the same list position in
       * this field. hf and hf_styles fields should always be the same length.
       * E.g. "none", "upper", "blink", "strike".
       */
      Fb.create('hf_styles', T.StringType.create())
        .asAList()
        .format(Format.SLUG)
        .build(),
    ];
  }
}
