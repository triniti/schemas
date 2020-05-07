import Enum from '@gdbots/common/Enum';

export default class TranscodingStatus extends Enum {
}

TranscodingStatus.configure({
  UNKNOWN: 'unknown',
  PROCESSING: 'processing',
  CANCELED: 'canceled',
  COMPLETED: 'completed',
  FAILED: 'failed',
}, 'triniti:ovp:transcoding-status');
