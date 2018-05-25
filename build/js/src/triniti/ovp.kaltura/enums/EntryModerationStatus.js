import Enum from '@gdbots/common/Enum';

export default class EntryModerationStatus extends Enum {
}

EntryModerationStatus.configure({
  UNKNOWN: 0,
  PENDING_MODERATION: 1,
  APPROVED: 2,
  REJECTED: 3,
  DELETED: 4,
  FLAGGED_FOR_REVIEW: 5,
  AUTO_APPROVED: 6,
}, 'triniti:ovp.kaltura:entry-moderation-status');
