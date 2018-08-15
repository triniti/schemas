// @link http://schemas.triniti.io/json-schema/triniti/notify/apple-news-notifier-result/1-0-0.json#
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNotifyAppleNewsNotifierResultV1Mixin from '@triniti/schemas/triniti/notify/mixin/apple-news-notifier-result/AppleNewsNotifierResultV1Mixin';

export default class AppleNewsNotifierResultV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:notify::apple-news-notifier-result:1-0-0', AppleNewsNotifierResultV1,
      [],
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

MessageResolver.register('triniti:notify::apple-news-notifier-result', AppleNewsNotifierResultV1);
Object.freeze(AppleNewsNotifierResultV1);
Object.freeze(AppleNewsNotifierResultV1.prototype);
