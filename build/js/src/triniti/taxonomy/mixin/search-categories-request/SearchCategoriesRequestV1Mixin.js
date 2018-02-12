// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/search-categories-request/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class SearchCategoriesRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:search-categories-request:1-0-0');
  }
}
