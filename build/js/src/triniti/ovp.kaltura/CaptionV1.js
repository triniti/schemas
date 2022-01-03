// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/caption/1-0-0.json#
import CaptionAssetStatus from '@triniti/schemas/triniti/ovp.kaltura/enums/CaptionAssetStatus.js';
import CaptionType from '@triniti/schemas/triniti/ovp.kaltura/enums/CaptionType.js';
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import Message from '@gdbots/pbj/Message.js';
import MessageRef from '@gdbots/pbj/well-known/MessageRef.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class CaptionV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('version', T.SmallIntType.create())
          .build(),
        Fb.create('size', T.MediumIntType.create())
          .build(),
        Fb.create('file_ext', T.StringType.create())
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('created_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('updated_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('deleted_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('description', T.StringType.create())
          .build(),
        Fb.create('language', T.StringType.create())
          .build(),
        Fb.create('language_code', T.StringType.create())
          .pattern('^\\w+$')
          .build(),
        Fb.create('is_default', T.BooleanType.create())
          .build(),
        Fb.create('accuracy', T.SmallIntType.create())
          .build(),
        Fb.create('url', T.TextType.create())
          .format(Format.URL)
          .build(),
        Fb.create('status', T.StringEnumType.create())
          .classProto(CaptionAssetStatus)
          .build(),
        Fb.create('format', T.StringEnumType.create())
          .classProto(CaptionType)
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
    return new MessageRef(this.schema().getCurie(), this.get('id'), tag);
  }
  
  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return {
      id: this.get('id'),
      entry_id: this.get('entry_id'),
    };
  }
}

const M = CaptionV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:ovp.kaltura::caption:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:ovp.kaltura::caption';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:ovp.kaltura::caption:v1';
M.prototype.MIXINS = M.MIXINS = [];

Object.freeze(M);
Object.freeze(M.prototype);
