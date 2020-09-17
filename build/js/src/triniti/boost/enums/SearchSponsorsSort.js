import Enum from '@gdbots/pbj/Enum';

export default class SearchSponsorsSort extends Enum {
}

SearchSponsorsSort.configure({
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
}, 'triniti:boost:search-sponsors-sort');
