import Enum from '@gdbots/pbj/Enum.js';

export default class AspectRatio extends Enum {
}

AspectRatio.configure({
  UNKNOWN: 'unknown',
  AUTO: 'auto',
  R1BY1: '1by1',
  R2BY3: '2by3',
  R3BY2: '3by2',
  R3BY4: '3by4',
  R4BY3: '4by3',
  R4BY5: '4by5',
  R5BY4: '5by4',
  R5BY6: '5by6',
  R6BY5: '6by5',
  R9BY16: '9by16',
  R16BY9: '16by9',
  ORIGINAL: 'original',
  CUSTOM: 'custom',
}, 'triniti:common:aspect-ratio');
