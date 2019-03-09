// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/apple-news-article-synced/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class AppleNewsArticleSyncedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:apple-news-article-synced:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A reference to the article that was synced.
       */
      Fb.create('node_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      /*
       * A reference to the notification that caused the sync to take place.
       */
      Fb.create('notification_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      Fb.create('apple_news_operation', T.StringType.create())
        .pattern('^(notification|create|update|delete)$')
        .withDefault("notification")
        .build(),
      /*
       * The unique identifier of the Apple News article.
       */
      Fb.create('apple_news_id', T.UuidType.create())
        .useTypeDefault(false)
        .build(),
      /*
       * The new revision token for the Apple News article.
       * e.g. AAAAAAAAAAAAAAAAAAAAAQ==
       */
      Fb.create('apple_news_revision', T.StringType.create())
        .pattern('^[\\w\\/\\.\\\\\\:=+-]+$')
        .build(),
      Fb.create('apple_news_share_url', T.TextType.create())
        .format(Format.URL)
        .build(),
    ];
  }
}
