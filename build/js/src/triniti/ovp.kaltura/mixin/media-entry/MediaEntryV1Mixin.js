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
      Fb.create('kaltura_sync_enabled', T.BooleanType.create())
        .build(),
      /*
       * Timestamp when the entry was last synced with Kaltura.
       */
      Fb.create('kaltura_synced_at', T.TimestampType.create())
        .build(),
      /*
       * URL to the source mp4 (generally a high-res/mezzanine file).
       */
      Fb.create('kaltura_mp4_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * An XML string containing the metadata profile(s) for the entry.
       */
      Fb.create('kaltura_metadata', T.TextType.create())
        .build(),
      /*
       * A JSON object with all of the Kaltura flavors for the entry.
       */
      Fb.create('kaltura_flavors', T.TextType.create())
        .build(),
    ];
  }
}
