// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ArticleV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:article:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('is_homepage_news', T.BooleanType.create())
        .build(),
      Fb.create('allow_comments', T.BooleanType.create())
        .build(),
      /*
       * A description of the article (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      /*
       * A swipe (aka banner/label/overlay) is a short string used in a visual treatment
       * on the article. e.g. "Exclusive", "NSFW", "Breaking Bad Mojo".
       */
      Fb.create('swipe', T.StringType.create())
        .build(),
      /*
       * Determines if AMP (Accelerated Mobile Pages) should be enabled for this article.
       */
      Fb.create('amp_enabled', T.BooleanType.create())
        .withDefault(true)
        .build(),
      Fb.create('related_articles', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
