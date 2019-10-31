// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/spotify-embed-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SpotifyEmbedBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:spotify-embed-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The type portion of a Spotify URI.
       * @link https://developer.spotify.com/documentation/web-api/#spotify-uris-and-ids
       */
      Fb.create('spotify_type', T.StringType.create())
        .required()
        .pattern('^(album|artist|episode|playlist|show|track)$')
        .build(),
      Fb.create('spotify_id', T.StringType.create())
        .required()
        .pattern('^\\w+$')
        .build(),
    ];
  }
}
