import Enum from '@gdbots/pbj/Enum.js';

export default class CaptionType extends Enum {
}

CaptionType.configure({
  UNKNOWN: 'unknown',
  SRT: '1',
  DFXP: '2',
  WEBVTT: '3',
  CAP: '4',
}, 'triniti:ovp.kaltura:caption-type');
