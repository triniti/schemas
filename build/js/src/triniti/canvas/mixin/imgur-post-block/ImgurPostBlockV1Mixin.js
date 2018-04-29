// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/imgur-post-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class ImgurPostBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:imgur-post-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('id', T.StringType.create())
        .required()
        .pattern('^[\\w\\/-]+$')
        .build(),
      /*
       * When true, shows the post details.
       */
      Fb.create('show_context', T.BooleanType.create())
        .withDefault(true)
        .build(),
    ];
  }
}
