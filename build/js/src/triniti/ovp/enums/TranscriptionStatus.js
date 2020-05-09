import Enum from '@gdbots/common/Enum';

export default class TranscriptionStatus extends Enum {
}

TranscriptionStatus.configure({
  UNKNOWN: 'unknown',
  PROCESSING: 'processing',
  CANCELED: 'canceled',
  COMPLETED: 'completed',
  FAILED: 'failed',
}, 'triniti:ovp:transcription-status');