import Enum from '@gdbots/common/Enum';

export default class SearchPagesSort extends Enum {
}

SearchPagesSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  CREATED_AT_DESC: 'created-at-desc',
  CREATED_AT_ASC: 'created-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  PUBLISHED_AT_DESC: 'published-at-desc',
  PUBLISHED_AT_ASC: 'published-at-asc',
  ORDER_DATE_DESC: 'order-date-desc',
  ORDER_DATE_ASC: 'order-date-asc',
  TITLE_DESC: 'title-desc',
  TITLE_ASC: 'title-asc',
}, 'triniti:canvas:search-pages-sort');
