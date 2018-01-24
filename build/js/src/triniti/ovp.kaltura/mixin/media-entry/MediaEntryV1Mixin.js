// @link http://schemas.triniti.io/json-schema/triniti/ovp.kaltura/mixin/media-entry/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class MediaEntryV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp.kaltura:mixin:media-entry:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('kaltura_entry_id', T.StringType.create())
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('kaltura_partner_id', T.StringType.create())
        .pattern('^[\\w-]+$')
        .build(),
      /*
       * Updated at info from Kaltura
       */
      Fb.create('kaltura_updated_at', T.TimestampType.create())
        .build(),
      /*
       * MP4 URL from Kaltura
       */
      Fb.create('kaltura_mp4_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * Metadata from Kaltura
       */
      Fb.create('kaltura_metadata', T.TextType.create())
        .build(),
      /*
       * JSON with all Kaltura flavors
       */
      Fb.create('kaltura_flavors', T.TextType.create())
        .build(),
      /*
       * Disable Kaltura sync on entry
       */
      Fb.create('kaltura_sync_enabled', T.BooleanType.create())
        .build(),
    ];
  }
}
