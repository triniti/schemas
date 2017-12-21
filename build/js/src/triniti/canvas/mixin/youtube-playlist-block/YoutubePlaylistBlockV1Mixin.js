// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/youtube-playlist-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class YoutubePlaylistBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:youtube-playlist-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('playlist_id', T.StringType.create())
        .required()
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('video_id', T.StringType.create())
        .required()
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
    ];
  }
}
