// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/entry/1-0-0.json#
import DisplayInSearchType from '@triniti/schemas/triniti/ovp.kaltura/enums/DisplayInSearchType.js';
import EntryModerationStatus from '@triniti/schemas/triniti/ovp.kaltura/enums/EntryModerationStatus.js';
import EntryStatus from '@triniti/schemas/triniti/ovp.kaltura/enums/EntryStatus.js';
import EntryType from '@triniti/schemas/triniti/ovp.kaltura/enums/EntryType.js';
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import MediaType from '@triniti/schemas/triniti/ovp.kaltura/enums/MediaType.js';
import Message from '@gdbots/pbj/Message.js';
import MessageRef from '@gdbots/pbj/well-known/MessageRef.js';
import Schema from '@gdbots/pbj/Schema.js';
import SourceType from '@triniti/schemas/triniti/ovp.kaltura/enums/SourceType.js';
import T from '@gdbots/pbj/types/index.js';

export default class EntryV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
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
        Fb.create('moderation_status', T.StringEnumType.create())
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
        Fb.create('flavor_params_ids', T.IntType.create())
          .asASet()
          .build(),
        Fb.create('data_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('download_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('version', T.SmallIntType.create())
          .build(),
        Fb.create('thumbnail_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('thumbnail_created_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('thumbnail_ext', T.StringType.create())
          .pattern('^[\\w\\.-]+$')
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
        Fb.create('media_type', T.StringEnumType.create())
          .classProto(MediaType)
          .build(),
        Fb.create('source_type', T.StringEnumType.create())
          .classProto(SourceType)
          .build(),
        Fb.create('metadata', T.TextType.create())
          .asAMap()
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

const M = EntryV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:ovp.kaltura::entry:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:ovp.kaltura::entry';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:ovp.kaltura::entry:v1';
M.prototype.MIXINS = M.MIXINS = [];

Object.freeze(M);
Object.freeze(M.prototype);
