// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/entry/1-0-0.json#
import DisplayInSearchType from '@triniti/schemas/triniti/ovp.kaltura/enums/DisplayInSearchType';
import EntryModerationStatus from '@triniti/schemas/triniti/ovp.kaltura/enums/EntryModerationStatus';
import EntryStatus from '@triniti/schemas/triniti/ovp.kaltura/enums/EntryStatus';
import EntryType from '@triniti/schemas/triniti/ovp.kaltura/enums/EntryType';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import MediaType from '@triniti/schemas/triniti/ovp.kaltura/enums/MediaType';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import SourceType from '@triniti/schemas/triniti/ovp.kaltura/enums/SourceType';
import T from '@gdbots/pbj/types';

export default class EntryV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp.kaltura::entry:1-0-0', EntryV1,
      [
        Fb.create('entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('title', T.StringType.create())
          .build(),
        Fb.create('description', T.TextType.create())
          .build(),
        Fb.create('partner_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('user_id', T.StringType.create())
          .build(),
        Fb.create('creator_id', T.StringType.create())
          .build(),
        Fb.create('tags', T.StringType.create())
          .asASet()
          .build(),
        Fb.create('categories', T.StringType.create())
          .asASet()
          .build(),
        Fb.create('categories_ids', T.StringType.create())
          .asASet()
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('categories_normalized', T.StringType.create())
          .asASet()
          .build(),
        Fb.create('status', T.StringEnumType.create())
          .classProto(EntryStatus)
          .build(),
        Fb.create('moderation_status', T.IntEnumType.create())
          .classProto(EntryModerationStatus)
          .build(),
        Fb.create('type', T.StringEnumType.create())
          .classProto(EntryType)
          .build(),
        Fb.create('created_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('updated_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('rank', T.FloatType.create())
          .build(),
        Fb.create('flavor_params_id', T.StringType.create())
          .asASet()
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('data_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('download_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('version', T.SmallIntType.create())
          .build(),
        Fb.create('thumbnail_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('start_date', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('end_date', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('reference_id', T.StringType.create())
          .pattern('^[\\w\\.:,\\/-]+$')
          .build(),
        Fb.create('replacing_entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('replaced_entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('redirect_entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('root_entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('parent_entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('display_in_search', T.StringEnumType.create())
          .classProto(DisplayInSearchType)
          .build(),
        Fb.create('plays', T.IntType.create())
          .build(),
        Fb.create('views', T.IntType.create())
          .build(),
        Fb.create('last_played_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('width', T.SmallIntType.create())
          .build(),
        Fb.create('height', T.SmallIntType.create())
          .build(),
        Fb.create('duration', T.SmallIntType.create())
          .build(),
        Fb.create('duration_ms', T.MediumIntType.create())
          .build(),
        Fb.create('media_type', T.IntEnumType.create())
          .classProto(MediaType)
          .build(),
        Fb.create('source_type', T.StringEnumType.create())
          .classProto(SourceType)
          .build(),
        Fb.create('metadata', T.TextType.create())
          .asAMap()
          .build(),
      ],
    );
  }

  /**
   * @param {?string} tag
   * @returns {MessageRef}
   */
  generateMessageRef(tag = null) {
    return new MessageRef(this.schema().getCurie(), this.get('entry_id'), tag);
  }
  
  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return {
      entry_id: this.get('entry_id'),
      partner_id: this.get('partner_id'),
    };
  }
}

MessageResolver.register('triniti:ovp.kaltura::entry', EntryV1);
Object.freeze(EntryV1);
Object.freeze(EntryV1.prototype);
