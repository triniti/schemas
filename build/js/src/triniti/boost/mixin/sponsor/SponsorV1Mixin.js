// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/sponsor/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SponsorId from '@triniti/schemas/triniti/boost/SponsorId';
import SponsorType from '@triniti/schemas/triniti/boost/enums/SponsorType';
import T from '@gdbots/pbj/types';

export default class SponsorV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:boost:mixin:sponsor:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => SponsorId.generate())
        .classProto(SponsorId)
        .overridable(true)
        .build(),
      Fb.create('type', T.StringEnumType.create())
        .withDefault(SponsorType.EXTERNAL)
        .classProto(SponsorType)
        .build(),
      /*
       * A string containing code that is injected into the application's html head tag.
       */
      Fb.create('permalink_html_head', T.TextType.create())
        .build(),
      /*
       * A string containing code that is injected into the application typically
       * next to/near the title of the content. It will be wrapped in a div with
       * the id and slug of the sponsor.
       */
      Fb.create('permalink_badge', T.TextType.create())
        .build(),
      /*
       * See description for "permalink_badge". This is very similar but in this
       * case the page is rendering many pieces of content, e.g. blogroll.
       */
      Fb.create('timeline_badge', T.TextType.create())
        .build(),
    ];
  }
}
