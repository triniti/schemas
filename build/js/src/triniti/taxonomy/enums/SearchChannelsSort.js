import Enum from '@gdbots/pbj/Enum.js';

export default class SearchChannelsSort extends Enum {
}

SearchChannelsSort.configure({
  UNKNOWN: 'unknown',
  CREATED_AT_ASC: 'created-at-asc',
  CREATED_AT_DESC: 'created-at-desc',
  UPDATED_AT_ASC: 'updated-at-asc',
  UPDATED_AT_DESC: 'updated-at-desc',
  TITLE_ASC: 'title-asc',
  TITLE_DESC: 'title-desc',
}, 'triniti:taxonomy:search-channels-sort');
