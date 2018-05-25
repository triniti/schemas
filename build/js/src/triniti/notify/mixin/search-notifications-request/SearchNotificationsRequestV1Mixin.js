// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/search-notifications-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import NotificationSendStatus from '@triniti/schemas/triniti/notify/enums/NotificationSendStatus';
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
      Fb.create('sort', T.StringEnumType.create())
        .withDefault(SearchNotificationsSort.SENT_AT_DESC)
        .classProto(SearchNotificationsSort)
        .build(),
      /*
       * A set of notification types (node must match at least one) to include in
       * the search results, such as android-notification or ios-notification.
       */
      Fb.create('types', T.StringType.create())
        .asASet()
        .format(Format.SLUG)
        .build(),
      Fb.create('send_status', T.StringEnumType.create())
        .classProto(NotificationSendStatus)
        .build(),
      /*
       * An app node ref that a notification must be linked with to match the search request.
       */
      Fb.create('app_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
      /*
       * A content node ref that a notification must be linked with to match the search request.
       */
      Fb.create('content_ref', T.IdentifierType.create())
        .classProto(NodeRef)
        .build(),
    ];
  }
}
