// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/tumblr-post-block/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TumblrPostBlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:tumblr-post-block:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('href', T.TextType.create())
        .required()
        .format(Format.URL)
        .build(),
      Fb.create('canonical_url', T.TextType.create())
        .format(Format.URL)
        .build(),
    ];
  }
}
