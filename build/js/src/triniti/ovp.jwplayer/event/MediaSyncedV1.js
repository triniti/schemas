// @link http://schemas.triniti.io/json-schema/triniti/ovp.jwplayer/event/media-synced/1-0-1.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class MediaSyncedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp.jwplayer:event:media-synced:1-0-1', MediaSyncedV1,
      [
        Fb.create('node_ref', T.IdentifierType.create())
          .required()
          .classProto(NodeRef)
          .build(),
        Fb.create('jwplayer_media_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        /*
         * The id of the image used to generate the jwplayer thumbnail.
         */
        Fb.create('jwplayer_thumbnail_image_id', T.IdentifierType.create())
          .classProto(AssetId)
          .build(),
        /*
         * The keys of the jwplayer captions that were generated.
         */
        Fb.create('jwplayer_caption_keys', T.StringType.create())
          .asAMap()
          .pattern('^[\\w]+$')
          .build(),
      ],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(MediaSyncedV1);
MessageResolver.register('triniti:ovp.jwplayer:event:media-synced', MediaSyncedV1);
Object.freeze(MediaSyncedV1);
Object.freeze(MediaSyncedV1.prototype);
