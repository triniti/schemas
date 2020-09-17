import Enum from '@gdbots/pbj/Enum';

export default class SearchTimelinesSort extends Enum {
}

SearchTimelinesSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  POPULARITY: 'popularity',
  CREATED_AT_ASC: 'created-at-asc',
  CREATED_AT_DESC: 'created-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  PUBLISHED_AT_ASC: 'published-at-asc',
  PUBLISHED_AT_DESC: 'published-at-desc',
  ORDER_DATE_ASC: 'order-date-asc',
  ORDER_DATE_DESC: 'order-date-desc',
  TITLE_ASC: 'title-asc',
  TITLE_DESC: 'title-desc',
}, 'triniti:curator:search-timelines-sort');
