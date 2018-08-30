// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/flavor/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import FlavorAssetStatus from '@triniti/schemas/triniti/ovp.kaltura/enums/FlavorAssetStatus';
import Format from '@gdbots/pbj/enums/Format';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class FlavorV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:ovp.kaltura::flavor:1-0-0', FlavorV1,
      [
        Fb.create('entry_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('flavor_params_id', T.IntType.create())
          .build(),
        Fb.create('id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        Fb.create('width', T.SmallIntType.create())
          .build(),
        Fb.create('height', T.SmallIntType.create())
          .build(),
        Fb.create('bitrate', T.SmallIntType.create())
          .build(),
        Fb.create('frame_rate', T.FloatType.create())
          .build(),
        Fb.create('is_original', T.BooleanType.create())
          .build(),
        Fb.create('is_web', T.BooleanType.create())
          .build(),
        Fb.create('container_format', T.StringType.create())
          .build(),
        Fb.create('video_codec_id', T.StringType.create())
          .build(),
        Fb.create('status', T.StringEnumType.create())
          .classProto(FlavorAssetStatus)
          .build(),
        Fb.create('language', T.StringType.create())
          .build(),
        Fb.create('is_default', T.BooleanType.create())
          .build(),
        Fb.create('version', T.SmallIntType.create())
          .build(),
        Fb.create('tags', T.StringType.create())
          .asASet()
          .build(),
        Fb.create('created_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('updated_at', T.TimestampType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('size', T.IntType.create())
          .build(),
        Fb.create('file_ext', T.StringType.create())
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('description', T.TextType.create())
          .build(),
        Fb.create('url', T.TextType.create())
          .format(Format.URL)
          .build(),
      ],
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

MessageResolver.register('triniti:ovp.kaltura::flavor', FlavorV1);
Object.freeze(FlavorV1);
Object.freeze(FlavorV1.prototype);
