import Enum from '@gdbots/pbj/Enum.js';

export default class EntryType extends Enum {
}

EntryType.configure({
  UNKNOWN: 'unknown',
  AUTOMATIC: '-1',
  CONFERENCE_ENTRY_SERVER: 'conference.CONFERENCE_ENTRY_SERVER',
  EXTERNAL_MEDIA: 'externalMedia.externalMedia',
  MEDIA_CLIP: '1',
  MIX: '2',
  PLAYLIST: '5',
  DATA: '6',
  LIVE_STREAM: '7',
  LIVE_CHANNEL: '8',
  DOCUMENT: '10',
}, 'triniti:ovp.kaltura:entry-type');
