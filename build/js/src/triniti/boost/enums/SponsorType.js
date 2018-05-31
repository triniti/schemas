import Enum from '@gdbots/common/Enum';

export default class SponsorType extends Enum {
}

SponsorType.configure({
  UNKNOWN: 'unknown',
  EXTERNAL: 'external',
  INTERNAL: 'internal',
  ADVERTORIAL: 'advertorial',
}, 'triniti:boost:sponsor-type');
