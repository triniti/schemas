import Enum from '@gdbots/common/Enum';

export default class MedialiveChannelStatus extends Enum {
}

MedialiveChannelStatus.configure({
  UNKNOWN: 'unknown',
  CREATE_FAILED: 'CREATE_FAILED',
  CREATING: 'CREATING',
  DELETED: 'DELETED',
  DELETING: 'DELETING',
  IDLE: 'IDLE',
  RECOVERING: 'RECOVERING',
  RUNNING: 'RUNNING',
  STARTING: 'STARTING',
  STOPPING: 'STOPPING',
  UPDATE_FAILED: 'UPDATE_FAILED',
  UPDATING: 'UPDATING',
}, 'triniti:ovp.medialive:medialive-channel-status');
