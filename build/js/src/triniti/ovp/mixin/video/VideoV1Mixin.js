// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class VideoV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:ovp:mixin:video:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * Duration of the video in seconds.
       */
      Fb.create('duration', T.SmallIntType.create())
        .build(),
      Fb.create('has_music', T.TrinaryType.create())
        .build(),
      Fb.create('allow_comments', T.BooleanType.create())
        .withDefault(true)
        .build(),
      /*
       * A description of the video (usually a few sentences). It should typically
       * not have HTML as it is used in metadata, feeds, SERP and social.
       */
      Fb.create('description', T.TextType.create())
        .maxLength(5000)
        .build(),
      /*
       * A swipe (aka banner/label/overlay) is a short string used in a visual treatment
       * on the video. e.g. "Exclusive", "NSFW", "Breaking Bad Mojo".
       */
      Fb.create('swipe', T.StringType.create())
        .build(),
      Fb.create('related_videos', T.IdentifierType.create())
        .asAList()
        .classProto(NodeRef)
        .build(),
    ];
  }
}
