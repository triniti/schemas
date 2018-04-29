// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaser/1-0-0.json#
import ContentType from '@triniti/schemas/triniti/curator/enums/ContentType';
import Fb from '@gdbots/pbj/FieldBuilder';
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
    return SchemaId.fromString('pbj:triniti:curator:mixin:teaser:1-0-0');
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
      Fb.create('content_type', T.StringEnumType.create())
        .classProto(ContentType)
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
      Fb.create('related_teasers', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
