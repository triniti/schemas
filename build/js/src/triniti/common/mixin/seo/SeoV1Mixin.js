// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/seo/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SeoV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:common:mixin:seo:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('seo_title', T.StringType.create())
        .build(),
      Fb.create('meta_description', T.TextType.create())
        .maxLength(5000)
        .build(),
      Fb.create('meta_keywords', T.StringType.create())
        .asASet()
        .build(),
      /*
       * Unlisted content will not show up in any search results
       * but can still be viewed if you know the URL.
       */
      Fb.create('is_unlisted', T.BooleanType.create())
        .build(),
    ];
  }
}
