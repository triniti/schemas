import Enum from '@gdbots/pbj/Enum.js';

export default class ChannelState extends Enum {
}

ChannelState.configure({
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
}, 'triniti:ovp.medialive:channel-state');
