// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-stats/1-0-0.json#
import ArticleId from '@triniti/schemas/triniti/news/ArticleId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ArticleStatsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:article-stats:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => ArticleId.generate())
        .classProto(ArticleId)
        .overridable(true)
        .build(),
      Fb.create('comments', T.IntType.create())
        .build(),
      Fb.create('fb_shares', T.IntType.create())
        .build(),
      Fb.create('views', T.IntType.create())
        .build(),
    ];
  }
}
