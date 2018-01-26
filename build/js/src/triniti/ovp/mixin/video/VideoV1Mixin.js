// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video/1-0-0.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';
import TvpgRating from '@triniti/schemas/triniti/ovp/enums/TvpgRating';

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
       * A credit is a short string used to publicly acknowledge the source/creator
       * of the video. e.g. "Fox News", "CNN".
       */
      Fb.create('credit', T.StringType.create())
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
      /*
       * URL to the caption file keyed by the language code, e.g. "en", "fr".
       */
      Fb.create('caption_urls', T.StringType.create())
        .asAMap()
        .format(Format.URL)
        .build(),
      Fb.create('tvpg_rating', T.StringEnumType.create())
        .classProto(TvpgRating)
        .build(),
      /*
       * URL to the mezzanine video asset.
       */
      Fb.create('mezzanine_url', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * A reference to the mezzanine asset in DAM for this video.
       */
      Fb.create('mezzanine_id', T.IdentifierType.create())
        .classProto(AssetId)
        .build(),
    ];
  }
}
