// @link http://schemas.triniti.io/json-schema/triniti/notify/notifier-result/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class NotifierResultV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:notify::notifier-result:1-0-0', NotifierResultV1,
      [
        Fb.create('ok', T.BooleanType.create())
          .withDefault(true)
          .build(),
        Fb.create('code', T.SmallIntType.create())
          .withDefault(0)
          .build(),
        Fb.create('error_name', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('error_message', T.TextType.create())
          .build(),
        Fb.create('apple_news_article_id', T.TextType.create())
          .build(),
        Fb.create('apple_news_share_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('apple_news_revision_token', T.TextType.create())
          .build(),
        /*
         * When a notification is sent the platform/vendor often responds with a payload
         * that describes the result. This field should contain a (de)serializable
         * string, JSON is preferred.
         */
        Fb.create('raw_response', T.TextType.create())
          .build(),
      ],
      [
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }

  /**
   * @param {?string} tag
   * @returns {MessageRef}
   */
  generateMessageRef(tag = null) {
    return new MessageRef(this.schema().getCurie(), this.generateEtag(), tag);
  }
  
  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return {};
  }
}

MessageResolver.register('triniti:notify::notifier-result', NotifierResultV1);
Object.freeze(NotifierResultV1);
Object.freeze(NotifierResultV1.prototype);
