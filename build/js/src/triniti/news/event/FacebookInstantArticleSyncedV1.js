// @link http://schemas.triniti.io/json-schema/triniti/news/event/facebook-instant-article-synced/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class FacebookInstantArticleSyncedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:news:event:facebook-instant-article-synced:1-0-1', FacebookInstantArticleSyncedV1,
      [
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
        Fb.create('fbia_operation', T.StringType.create())
          .pattern('^(create|update|delete)$')
          .withDefault("create")
          .build(),
      ],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(FacebookInstantArticleSyncedV1);
MessageResolver.register('triniti:news:event:facebook-instant-article-synced', FacebookInstantArticleSyncedV1);
Object.freeze(FacebookInstantArticleSyncedV1);
Object.freeze(FacebookInstantArticleSyncedV1.prototype);
