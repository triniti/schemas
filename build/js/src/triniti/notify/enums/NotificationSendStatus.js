import Enum from '@gdbots/pbj/Enum';

export default class NotificationSendStatus extends Enum {
}

NotificationSendStatus.configure({
  UNKNOWN: 'unknown',
  DRAFT: 'draft',
  SCHEDULED: 'scheduled',
  SENT: 'sent',
  CANCELED: 'canceled',
  FAILED: 'failed',
}, 'triniti:notify:notification-send-status');
