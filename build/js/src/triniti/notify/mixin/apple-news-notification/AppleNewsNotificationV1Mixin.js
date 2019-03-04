// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/apple-news-notification/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AppleNewsNotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:apple-news-notification:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('apple_news_operation', T.StringType.create())
        .pattern('^(create|update|delete)$')
        .build(),
      /*
       * The unique identifier of the Apple News article.
       */
      Fb.create('apple_news_id', T.UuidType.create())
        .useTypeDefault(false)
        .build(),
      /*
       * The existing revision token for the Apple News article.
       * e.g. AAAAAAAAAAAAAAAAAAAAAQ==
       */
      Fb.create('apple_news_revision', T.StringType.create())
        .pattern('^[\\w\\/\\.\\\\\\:=+-]+$')
        .build(),
    ];
  }
}
