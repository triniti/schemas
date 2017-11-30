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
}, 'triniti:pages:search-pages-sort');
