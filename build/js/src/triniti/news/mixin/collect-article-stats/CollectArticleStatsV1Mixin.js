// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/collect-article-stats/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class CollectArticleStatsV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:collect-article-stats:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('node_ref', T.IdentifierType.create())
        .required()
        .classProto(NodeRef)
        .build(),
      /*
       * The name of the services to get the stats from, e.g. adobe, facebook,
       * google, disqus, etc. When not provided you should call all providers.
       */
      Fb.create('providers', T.StringType.create())
        .asASet()
        .format(Format.SLUG)
        .build(),
    ];
  }
}
