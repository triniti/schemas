// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/apple-news-notifier-result/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AppleNewsNotifierResultV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:apple-news-notifier-result:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('apple_news_article_id', T.TextType.create())
        .pattern('^[a-z0-9-]+$')
        .build(),
      Fb.create('apple_news_share_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('apple_news_revision_token', T.TextType.create())
        .pattern('^[A-Za-z0-9=\\/]+$')
        .build(),
    ];
  }
}
