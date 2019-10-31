// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/spotify-podcast-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SpotifyPodcastBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:spotify-podcast-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('episode_id', T.StringType.create())
        .required()
        .pattern('^\\w+$')
        .build(),
      Fb.create('show_id', T.StringType.create())
        .required()
        .pattern('^\\w+$')
        .build(),
    ];
  }
}
