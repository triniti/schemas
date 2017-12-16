// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/youtube-video/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class YoutubeVideoV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:youtube-video:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('id', T.StringType.create())
        .required()
        .pattern('^[\\w-]+$')
        .build(),
      Fb.create('autoplay', T.BooleanType.create())
        .build(),
    ];
  }
}
