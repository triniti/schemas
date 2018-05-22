import Enum from '@gdbots/common/Enum';

export default class NotificationStatus extends Enum {
}

NotificationStatus.configure({
  UNKNOWN: 'unknown',
  SENT: 'sent',
  CANCELLED: 'cancelled',
  SCHEDULED: 'scheduled',
}, 'triniti:notify:notification-status');
