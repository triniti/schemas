import Enum from '@gdbots/common/Enum';

export default class TvpgRating extends Enum {
}

TvpgRating.configure({
  UNKNOWN: 'unknown',
  TV_G: 'TV-G',
  TV_MA: 'TV-MA',
  TV_PG: 'TV-PG',
  TV_Y: 'TV-Y',
  TV_Y7: 'TV-Y7',
  TV_Y7_FV: 'TV-Y7-FV',
  TV_14: 'TV-14',
}, 'triniti:ovp:tvpg-rating');
