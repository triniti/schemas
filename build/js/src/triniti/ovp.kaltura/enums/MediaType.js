import Enum from '@gdbots/pbj/Enum.js';

export default class MediaType extends Enum {
}

MediaType.configure({
  UNKNOWN: 'unknown',
  VIDEO: '1',
  IMAGE: '2',
  AUDIO: '5',
  LIVE_STREAM_FLASH: '201',
  LIVE_STREAM_WINDOWS_MEDIA: '202',
  LIVE_STREAM_REAL_MEDIA: '203',
  LIVE_STREAM_QUICKTIME: '204',
}, 'triniti:ovp.kaltura:media-type');
