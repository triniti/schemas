// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/get-article-history-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GetArticleHistoryRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:get-article-history-request:1-0-0');
  }
}
