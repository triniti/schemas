import Enum from '@gdbots/common/Enum';

export default class SendStatus extends Enum {
}

SendStatus.configure({
  UNKNOWN: 'unknown',
  SENT: 'sent',
  CANCELED: 'canceled',
  SCHEDULED: 'scheduled',
  FAILED: 'failed',
}, 'triniti:notify:send-status');
