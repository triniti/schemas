import Enum from '@gdbots/common/Enum';

export default class SearchArticlesSort extends Enum {
}

SearchArticlesSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  POPULARITY: 'popularity',
  CREATED_AT_DESC: 'created-at-desc',
  CREATED_AT_ASC: 'created-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  TITLE_DESC: 'title-desc',
  TITLE_ASC: 'title-asc',
}, 'triniti:news:search-articles-sort');
