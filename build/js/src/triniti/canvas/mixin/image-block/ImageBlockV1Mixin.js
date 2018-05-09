// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/image-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ImageBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:image-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('caption', T.TextType.create())
        .maxLength(2000)
        .build(),
      Fb.create('is_nsfw', T.BooleanType.create())
        .build(),
      Fb.create('url', T.StringType.create())
        .format(Format.URL)
        .build(),
    ];
  }
}
