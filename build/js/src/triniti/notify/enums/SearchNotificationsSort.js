import Enum from '@gdbots/common/Enum';

export default class SearchNotificationsSort extends Enum {
}

SearchNotificationsSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  CREATED_AT_ASC: 'created-at-asc',
  CREATED_AT_DESC: 'created-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  SENT_AT_ASC: 'sent-at-asc',
  SENT_AT_DESC: 'sent-at-desc',
  TITLE_ASC: 'title-asc',
  TITLE_DESC: 'title-desc',
}, 'triniti:notify:search-notifications-sort');
