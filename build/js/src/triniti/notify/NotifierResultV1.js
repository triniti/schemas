// @link http://schemas.triniti.io/json-schema/triniti/notify/notifier-result/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TrinitiNotifyAppleNewsNotifierResultV1Mixin from '@triniti/schemas/triniti/notify/mixin/apple-news-notifier-result/AppleNewsNotifierResultV1Mixin';

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
        TrinitiNotifyAppleNewsNotifierResultV1Mixin.create(),
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
