// @link http://schemas.triniti.io/json-schema/triniti/notify/notifier-result/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Message from '@gdbots/pbj/Message.js';
import MessageRef from '@gdbots/pbj/well-known/MessageRef.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class NotifierResultV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        /*
         * Tags is a map that categorizes data or tracks references in
         * external systems. The tags names should be consistent and descriptive,
         * e.g. fb_user_id:123, salesforce_customer_id:456.
         */
        Fb.create('tags', T.StringType.create())
          .asAMap()
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
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
      this.MIXINS,
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

const M = NotifierResultV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:notify::notifier-result:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:notify::notifier-result';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:notify::notifier-result:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:common:mixin:taggable:v1',
  'gdbots:common:mixin:taggable',
];

Object.freeze(M);
Object.freeze(M.prototype);
