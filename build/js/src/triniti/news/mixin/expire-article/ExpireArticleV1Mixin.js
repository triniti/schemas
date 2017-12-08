// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/expire-article/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class ExpireArticleV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:news:mixin:expire-article:1-0-0');
  }
}
