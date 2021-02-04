import Enum from '@gdbots/pbj/Enum';

export default class SearchNotificationsSort extends Enum {
}

SearchNotificationsSort.configure({
  UNKNOWN: 'unknown',
  CREATED_AT_ASC: 'created-at-asc',
  CREATED_AT_DESC: 'created-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  SEND_AT_ASC: 'send-at-asc',
  SEND_AT_DESC: 'send-at-desc',
  SENT_AT_ASC: 'sent-at-asc',
  SENT_AT_DESC: 'sent-at-desc',
}, 'triniti:notify:search-notifications-sort');
