import Enum from '@gdbots/pbj/Enum.js';

export default class SourceType extends Enum {
}

SourceType.configure({
  UNKNOWN: 'unknown',
  LIMELIGHT_LIVE: 'limeLight.LIVE_STREAM',
  VELOCIX_LIVE: 'velocix.VELOCIX_LIVE',
  FILE: '1',
  WEBCAM: '2',
  URL: '5',
  SEARCH_PROVIDER: '6',
  AKAMAI_LIVE: '29',
  MANUAL_LIVE_STREAM: '30',
  AKAMAI_UNIVERSAL_LIVE: '31',
  LIVE_STREAM: '32',
  LIVE_CHANNEL: '33',
  RECORDED_LIVE: '34',
  CLIP: '35',
  KALTURA_RECORDED_LIVE: '36',
  LECTURE_CAPTURE: '37',
  LIVE_STREAM_ONTEXTDATA_CAPTIONS: '42',
}, 'triniti:ovp.kaltura:source-type');
