// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-published/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class ArticlePublishedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:article-published:1-0-0');
  }
}
