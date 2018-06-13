import Enum from '@gdbots/common/Enum';

export default class SearchAssetsSort extends Enum {
}

SearchAssetsSort.configure({
  UNKNOWN: 'unknown',
  RELEVANCE: 'relevance',
  CREATED_AT_ASC: 'created-at-asc',
  CREATED_AT_DESC: 'created-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  TITLE_ASC: 'title-asc',
  TITLE_DESC: 'title-desc',
  MIME_TYPE_ASC: 'mime-type-asc',
  MIME_TYPE_DESC: 'mime-type-desc',
  GALLERY_SEQ_ASC: 'gallery-seq-asc',
  GALLERY_SEQ_DESC: 'gallery-seq-desc',
}, 'triniti:dam:search-assets-sort');
