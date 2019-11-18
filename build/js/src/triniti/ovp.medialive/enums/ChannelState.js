import Enum from '@gdbots/common/Enum';

export default class ChannelState extends Enum {
}

ChannelState.configure({
  CREATE_FAILED: 'create-failed',
  CREATING: 'creating',
  DELETED: 'deleted',
  DELETING: 'deleting',
  IDLE: 'idle',
  RECOVERING: 'recovering',
  RUNNING: 'running',
  STARTING: 'starting',
  STOPPING: 'stopping',
  UNKNOWN: 'unknown',
  UPDATE_FAILED: 'update-failed',
  UPDATING: 'updating',
}, 'triniti:ovp.medialive:channel-state');
