// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';
import TeaserId from '@triniti/schemas/triniti/curator/TeaserId';

export default class TeaserV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:teaser:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .withDefault(() => TeaserId.generate())
        .classProto(TeaserId)
        .overridable(true)
        .build(),
      /*
       * Determines the sequence that this teaser node will be rendered
       * in lists, search results, etc. It DOES NOT control visibility or
       * publishing. A date was used over an integer (e.g. seq_no) for
       * blog-like, reverse chronological, clarity in sorting.
       */
      Fb.create('order_date', T.DateTimeType.create())
        .build(),
      /*
       * A reference to the image asset to use for widgets, sharing, seo.
       */
      Fb.create('image_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A description of the teaser (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      /*
       * Text to be used to caption the teaser.
       */
      Fb.create('caption', T.StringType.create())
        .build(),
      /*
       * Text to be used for the call to action.
       */
      Fb.create('cta_text', T.StringType.create())
        .build(),
      /*
       * Text to be used to credit the teaser source.
       */
      Fb.create('credit', T.StringType.create())
        .build(),
      /*
       * URL to be used to link to the teaser source.
       */
      Fb.create('credit_url', T.TextType.create())
        .format(Format.URL)
        .build(),
      Fb.create('gallery_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      Fb.create('timeline_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
