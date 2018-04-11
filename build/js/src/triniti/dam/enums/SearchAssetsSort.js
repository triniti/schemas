import Enum from '@gdbots/common/Enum';

export default class SearchAssetsSort extends Enum {
}

SearchAssetsSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  CREATED_AT_DESC: 'created-at-desc',
  CREATED_AT_ASC: 'created-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  TITLE_DESC: 'title-desc',
  TITLE_ASC: 'title-asc',
  MIME_TYPE_DESC: 'mime-type-desc',
  MIME_TYPE_ASC: 'mime-type-asc',
}, 'triniti:dam:search-assets-sort');
