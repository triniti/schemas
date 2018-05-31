import Enum from '@gdbots/common/Enum';

export default class CaptionAssetStatus extends Enum {
}

CaptionAssetStatus.configure({
  UNKNOWN: 'unknown',
  ERROR: '-1',
  QUEUED: '0',
  READY: '2',
  DELETED: '3',
  IMPORTING: '7',
  EXPORTING: '9',
}, 'triniti:ovp.kaltura:caption-asset-status');
