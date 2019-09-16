// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/youtube-video-teaser/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class YoutubeVideoTeaserV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:youtube-video-teaser:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('youtube_video_id', T.StringType.create())
        .required()
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('youtube_custom_id', T.StringType.create())
        .pattern('^[\\w@#-]+$')
        .build(),
    ];
  }
}
