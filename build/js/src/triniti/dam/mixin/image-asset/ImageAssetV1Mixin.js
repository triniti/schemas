// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/image-asset/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ImageAssetV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:dam:mixin:image-asset:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * The image width in pixels
       */
      Fb.create('width', T.MediumIntType.create())
        .build(),
      /*
       * The image height in pixels
       */
      Fb.create('height', T.MediumIntType.create())
        .build(),
    ];
  }
}
