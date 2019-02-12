// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/link-teaser/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class LinkTeaserV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:link-teaser:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('link_url', T.TextType.create())
        .required()
        .format(Format.URL)
        .build(),
      Fb.create('partner_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('partner_text', T.StringType.create())
        .build(),
    ];
  }
}
