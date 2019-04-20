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
      Fb.create('views', T.IntType.create())
        .build(),
      Fb.create('disqus_comments', T.IntType.create())
        .build(),
      Fb.create('disqus_dislikes', T.IntType.create())
        .build(),
      Fb.create('disqus_likes', T.IntType.create())
        .build(),
      Fb.create('fb_comments', T.IntType.create())
        .build(),
      Fb.create('fb_reactions', T.IntType.create())
        .build(),
      Fb.create('fb_shares', T.IntType.create())
        .build(),
      /*
       * The sum of all fb_* metrics collected.
       */
      Fb.create('fb_engagement', T.IntType.create())
        .build(),
      Fb.create('ga_entrances', T.IntType.create())
        .build(),
      Fb.create('ga_entrance_rate', T.IntType.create())
        .build(),
      Fb.create('ga_pageviews', T.IntType.create())
        .build(),
      Fb.create('ga_unique_pageviews', T.IntType.create())
        .build(),
      Fb.create('ga_time_on_page', T.IntType.create())
        .build(),
      Fb.create('ga_avg_time_on_page', T.IntType.create())
        .build(),
      Fb.create('ga_exits', T.IntType.create())
        .build(),
      Fb.create('ga_exit_rate', T.IntType.create())
        .build(),
    ];
  }
}
