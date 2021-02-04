import Enum from '@gdbots/pbj/Enum';

export default class EntryStatus extends Enum {
}

EntryStatus.configure({
  UNKNOWN: 'unknown',
  ERROR_IMPORTING: '-2',
  ERROR_CONVERTING: '-1',
  SCAN_FAILURE: 'virusScan.ScanFailure',
  IMPORT: '0',
  INFECTED: 'virusScan.Infected',
  PRECONVERT: '1',
  READY: '2',
  DELETED: '3',
  PENDING: '4',
  MODERATE: '5',
  BLOCKED: '6',
  NO_CONTENT: '7',
}, 'triniti:ovp.kaltura:entry-status');
