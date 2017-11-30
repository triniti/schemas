import Enum from '@gdbots/common/Enum';

export default class SearchVideosSort extends Enum {
}

SearchVideosSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  CREATED_AT_DESC: 'created-at-desc',
  CREATED_AT_ASC: 'created-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
}, 'triniti:videos:search-videos-sort');
