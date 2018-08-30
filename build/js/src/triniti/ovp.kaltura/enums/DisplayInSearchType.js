import Enum from '@gdbots/common/Enum';

export default class DisplayInSearchType extends Enum {
}

DisplayInSearchType.configure({
  UNKNOWN: 'unknown',
  SYSTEM: '-1',
  NONE: '0',
  PARTNER_ONLY: '1',
  KALTURA_NETWORK: '2',
}, 'triniti:ovp.kaltura:display-in-search-type');