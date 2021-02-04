import Enum from '@gdbots/pbj/Enum';

export default class FlavorAssetStatus extends Enum {
}

FlavorAssetStatus.configure({
  UNKNOWN: 'unknown',
  ERROR: '-1',
  QUEUED: '0',
  CONVERTING: '1',
  READY: '2',
  DELETED: '3',
  NOT_APPLICABLE: '4',
  TEMP: '5',
  WAIT_FOR_CONVERT: '6',
  IMPORTING: '7',
  VALIDATING: '8',
  EXPORTING: '9',
}, 'triniti:ovp.kaltura:flavor-asset-status');
