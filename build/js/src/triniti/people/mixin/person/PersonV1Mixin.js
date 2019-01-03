// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import PersonId from '@triniti/schemas/triniti/people/PersonId';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class PersonV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:people:mixin:person:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => PersonId.generate())
        .classProto(PersonId)
        .overridable(true)
        .build(),
      /*
       * A reference to the image asset to use for widgets, sharing, seo.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A short bio of the person. It should typically not have HTML as it is
       * used in metadata, feeds, SERP and social.
       */
      Fb.create('bio', T.TextType.create())
        .build(),
      /*
       * Indicates where the bio data originated from, e.g. imdb, freebase, custom.
       */
      Fb.create('bio_source', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      Fb.create('imdb_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('twitter_username', T.StringType.create())
        .pattern('^\\w{1,15}$')
        .build(),
      Fb.create('is_celebrity', T.BooleanType.create())
        .build(),
    ];
  }
}
