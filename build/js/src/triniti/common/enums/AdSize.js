import Enum from '@gdbots/pbj/Enum.js';

export default class AdSize extends Enum {
}

AdSize.configure({
  UNKNOWN: 'unknown',
  MEDIUM_RECTANGLE: 'medium_rectangle',
  MEDIUM_RECTANGLE_FLEX: 'medium_rectangle_flex',
  LARGE_RECTANGLE: 'large_rectangle',
  SQUARE: 'square',
  SMALL_SQUARE: 'small_square',
  LEADERBOARD: 'leaderboard',
  LEADERBOARD_FLEX: 'leaderboard_flex',
  LARGE_LEADERBOARD: 'large_leaderboard',
  HALF_PAGE: 'half_page',
  SKYSCRAPER: 'skyscraper',
  WIDE_SKYSCRAPER: 'wide_skyscraper',
  BANNER: 'banner',
  HALF_BANNER: 'half_banner',
  PORTRAIT: 'portrait',
  BILLBOARD: 'billboard',
  SKIN: 'skin',
  INSTREAM: 'instream',
  OUTSTREAM: 'outstream',
}, 'triniti:common:ad-size');
