import Enum from '@gdbots/pbj/Enum.js';

export default class SlotRendering extends Enum {
}

SlotRendering.configure({
  UNKNOWN: 'unknown',
  SERVER: 'server',
  CLIENT: 'client',
  LAZY: 'lazy',
}, 'triniti:curator:slot-rendering');
