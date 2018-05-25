import Enum from '@gdbots/common/Enum';

export default class CaptionAssetStatus extends Enum {
}

CaptionAssetStatus.configure({
  UNKNOWN: '0',
  ERROR: '-1',
  QUEUED: '0',
  READY: '1',
  DELETED: '2',
  IMPORTING: '3',
  EXPORTING: '4',
}, 'triniti:ovp.kaltura:caption-asset-status');
