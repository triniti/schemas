import Enum from '@gdbots/pbj/Enum.js';

export default class SearchPromotionsSort extends Enum {
}

SearchPromotionsSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  CREATED_AT_ASC: 'created-at-asc',
  CREATED_AT_DESC: 'created-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  PUBLISHED_AT_ASC: 'published-at-asc',
  PUBLISHED_AT_DESC: 'published-at-desc',
  TITLE_ASC: 'title-asc',
  TITLE_DESC: 'title-desc',
  PRIORITY_ASC: 'priority-asc',
  PRIORITY_DESC: 'priority-desc',
}, 'triniti:curator:search-promotions-sort');
