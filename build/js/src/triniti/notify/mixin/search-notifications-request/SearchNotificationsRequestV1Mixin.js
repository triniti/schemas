// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/search-notifications-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import SearchNotificationsSort from '@triniti/schemas/triniti/notify/enums/SearchNotificationsSort';
import T from '@gdbots/pbj/types';

export default class SearchNotificationsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:search-notifications-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('is_unlisted', T.TrinaryType.create())
        .withDefault(2)
        .build(),
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchNotificationsSort.RELEVANCE)
        .classProto(SearchNotificationsSort)
        .build(),
    ];
  }
}
