// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/seo/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
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
      /*
       * A reference to the image asset to use for SEO instead of
       * the usual image_ref.
       */
      Fb.create('seo_image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * Allows customization of the publish date for SEO purposes. For example
       * if something meaningful within an article is updated, adjust this date
       * instead of the actual publish date.
       */
      Fb.create('seo_published_at', T.DateTimeType.create())
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