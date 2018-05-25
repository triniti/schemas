import Enum from '@gdbots/common/Enum';

export default class CaptionType extends Enum {
}

CaptionType.configure({
  UNKNOWN: 0,
  SRT: 1,
  DFXP: 2,
  WEBVTT: 3,
  CAP: 4,
}, 'triniti:ovp.kaltura:caption-type');
