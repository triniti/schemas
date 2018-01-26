// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/google-map-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GoogleMapBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:google-map-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('q', T.StringType.create())
        .build(),
      Fb.create('center', T.GeoPointType.create())
        .build(),
      Fb.create('zoom', T.TinyIntType.create())
        .max(21)
        .build(),
      Fb.create('maptype', T.StringType.create())
        .pattern('^(roadmap|satellite)$')
        .withDefault("roadmap")
        .build(),
    ];
  }
}
